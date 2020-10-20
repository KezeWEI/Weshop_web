<?php
$ip_local = gethostbyname($_ENV['COMPUTERNAME']); //获取服务端的局域网IP 
$externalContent = file_get_contents('http://checkip.dyndns.com/');
preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
$ip_public = $m[1] //赋值客户端外网IP       
?>