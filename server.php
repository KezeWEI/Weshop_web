<!--测试用，用于获取局域网IP和外网IP-->
<?php
$ip_local = gethostbyname($_ENV['COMPUTERNAME']); //获取客户端的局域网IP
$externalContent = file_get_contents('http://checkip.dyndns.com/');
preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
$ip_extern = $m[1]//赋值客户端外网IP
?>

<?php
//本地测试时使用局域网IP，加载到外网服务器之前切记修改为外网IP
$host = '192.168.1.100';
$port = '8000';
$null = NULL;

//创建tcp socket
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_set_option($socket, SOL_SOCKET, SO_REUSEADDR, 1);
socket_bind($socket, $host, $port);

//监听端口
socket_listen($socket);

//连接的client socket 列表
$clients = array($socket);
$weshop;

//设置一个死循环,用来监听连接 ,状态
while (true) {

    $changed = $clients;
    socket_select($changed, $null, $null, 0, 10);

    //如果有新的连接
    if (in_array($socket, $changed)) {//changed数组里找到了为该socket的值
        //接受并加入新的socket连接
        $socket_new = socket_accept($socket);
        socket_getpeername($socket_new, $ip);
        $clients[] = $socket_new;

        //通过socket获取数据执行handshake
        $header = socket_read($socket_new, 1024);
        perform_handshaking($header, $socket_new, $host, $port);

        //获取client ip 编码json数据,并发送通知
        socket_getpeername($socket_new, $ip);
        $response = mask(json_encode(array('type' => 'system', 'name' => $ip, 'message' => $ip . ' connected')));
        send_msg($response, $host);

        if ($ip == $host) {
            global $weshop;
            $weshop = $socket_new;
        }

        $found_socket = array_search($socket, $changed);
        unset($changed[$found_socket]);
    }

    //轮询 每个client socket 连接
    foreach ($changed as $changed_socket) {

        //如果有client数据发送过来
        while (socket_recv($changed_socket, $buf, 1024, 0) >= 1) {
            //解码发送过来的数据
            $received_text = unmask($buf);
            $tst_msg = json_decode($received_text);
            $msg_type = $tst_msg->type;
            $user_ip = $tst_msg->name;
            $user_message = $tst_msg->message;
            socket_getpeername($changed_socket, $ip);//当前socket的ip

            //把消息发送给对应的人
            if ($msg_type == 'clientmsg') {//如果是客户消息则定向发送给weshop
                $msg_to_weshop = mask(json_encode(array('type' => 'clientmsg', 'name' => $ip, 'message' => $user_message)));
                socket_sendto($weshop, $msg_to_weshop, strlen($msg_to_weshop), 0, $host, $port);
                //send_msg($testmsg, $host);
            } else if ($msg_type == 'system') {
                $testmsg2 = mask(json_encode(array('type' => 'system', 'name' => $ip, 'message' => '来自' . $ip . '的系统消息')));
                socket_sendto($weshop, $testmsg2, strlen($testmsg2), 0, $host, $port);
            } else if ($msg_type == 'weshop') {
                $msg_to_client = mask(json_encode(array('type' => 'weshop', 'name' => $ip, 'message' => $user_message)));
                send_msg($msg_to_client, $user_ip);
            }
            break 2;
        }

        //检查offline的client
        $buf = @socket_read($changed_socket, 1024, PHP_NORMAL_READ);
        if ($buf === false) {
            $found_socket = array_search($changed_socket, $clients);
            socket_getpeername($changed_socket, $ip);
            unset($clients[$found_socket]);
            $response = mask(json_encode(array('type' => 'system', 'name' => $ip, 'message' => $ip . ' disconnected')));
            send_msg($response, $host);
        }
    }
}
// 关闭监听的socket
socket_close($sock);

//发送消息的方法，将形参$msg传输给$ip对应的socket
function send_msg($msg, $ip) {
    global $clients;
    foreach ($clients as $search_client) {
        socket_getpeername ($search_client, $ip_client);
        if ($ip == $ip_client) {
            socket_sendto($search_client, $msg, strlen($msg), 0, $ip, $port);
        }
    }
}

//解码数据
function unmask($text) {
    $length = ord($text[1]) & 127;
    if ($length == 126) {
        $masks = substr($text, 4, 4);
        $data = substr($text, 8);
    } elseif ($length == 127) {
        $masks = substr($text, 10, 4);
        $data = substr($text, 14);
    } else {
        $masks = substr($text, 2, 4);
        $data = substr($text, 6);
    }
    $text = "";
    for ($i = 0; $i < strlen($data); ++$i) {
        $text .= $data[$i] ^ $masks[$i % 4];
    }
    return $text;
}

//编码数据
function mask($text) {
    $b1 = 0x80 | (0x1 & 0x0f);
    $length = strlen($text);

    if ($length <= 125)
        $header = pack('CC', $b1, $length);
    elseif ($length > 125 && $length < 65536)
        $header = pack('CCn', $b1, 126, $length);
    elseif ($length >= 65536)
        $header = pack('CCNN', $b1, 127, $length);
    return $header . $text;
}

//握手的逻辑
function perform_handshaking($receved_header, $client_conn, $host, $port) {
    $headers = array();
    $lines = preg_split("/\r\n/", $receved_header);
    foreach ($lines as $line) {
        $line = chop($line);
        if (preg_match('/\A(\S+): (.*)\z/', $line, $matches)) {
            $headers[$matches[1]] = $matches[2];
        }
    }

    $secKey = $headers['Sec-WebSocket-Key'];
    $secAccept = base64_encode(pack('H*', sha1($secKey . '258EAFA5-E914-47DA-95CA-C5AB0DC85B11')));
    $upgrade = "HTTP/1.1 101 Web Socket Protocol Handshake\r\n" .
            "Upgrade: websocket\r\n" .
            "Connection: Upgrade\r\n" .
            "WebSocket-Origin: $host\r\n" .
            "WebSocket-Location: ws://$host:$port/demo/shout.php\r\n" .
            "Sec-WebSocket-Accept:$secAccept\r\n\r\n";
    socket_write($client_conn, $upgrade, strlen($upgrade));
}
