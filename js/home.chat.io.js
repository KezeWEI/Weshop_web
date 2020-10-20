const socket = $.websocket('ws://'+server_ip+':'+server_port);
var username = ip_local;
var socketID;

//$(".livechat-girl").click(function () {

//window.location.onbeforeunload(function(){
//    //socket.emit();
//    socket.emit("chat message", socketID);
//});
$(window).load(function () {
    console.log("loaded.");
    //socket.emit('client onload', username);
});
//$(window).bind('beforeunload', function () {
//    //return "";
//    socket.emit("client disconnect", socketID);
//});
$(window).bind('beforeunload', function () {
    socket.emit('test', socketID);
    //socket.emit("client disconnect", socketID);
});

/***
 * 
 * Set up auto reply
 * 
 ***/
function AutoReply(type, msg) {
    var msg = $('#msg_client').val();
    if (msg != '') {
        repeatClientMsg(msg);
    }
    $('#msg_client').val('');
    /* 0 = when opening the site, no one is online
     * 1 = when chatting, internet disconnected in accident
     */
    if (type == '0') {
        reply("Pardon, il n'y a personne sur ligne maintenant.");
        reply("Vous pouvez lassier votre message <a style='text-decoration: underline; color: #ff9900' href='contact.php'>EN CLIQUANT ICI</a>");
        reply("Nous vont vous repondre des que possible.");
    } else if (type == '1') {
        reply("Pardon, l'internet est bloqué.");
        reply("Vous pouvez réessayer plus tard ou lassier votre message <a style='text-decoration: underline; color: #ff9900' href='contact.php'>EN CLIQUANT ICI</a>");
    }
    $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
}

/***
 * 
 * When a client visit our site
 * send back their IP as their name and store their info
 * 
 ***/
socket.on('connect', function (uid) {
    console.log('socket ID : ' + uid);
    socketID = uid;
    console.log('IP : ' + username);
    socket.emit('add user', username);
    if (online == '1') {
        reply("Bonjour, est-ce que je peux vous aider ?");
    } else {
        AutoReply(0, "");
    }
});

/***
 * 
 * Part of sending msg to weshop
 * check if weshop is online first
 * if online, call the function send() to send msg to server
 * and the server will send the msg properly to weshop
 * if offline, call the function AutoReply() who`ll lead client to send offline msg
 *
 ***/
function send() {//method of sending msg
    var msg = $('#msg_client').val();//read the msg
    if (msg != '') {//if msg isn`t empty then send it to server with client`s ip
        socket.emit('client msg', array = {
            username: username,
            msg: msg
        });
        repeatClientMsg(msg);//show client msg
        $('#msg_client').val('');//clear input
        $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);//scroll to the bottom
    }else {
        //if user doesnt enter msg, do nothing
    }

}
$(window).keydown(function (evt) {
    if (evt.keyCode == 13) {
        if (online == '1') {
            send();
        } else {
            AutoReply(0, "");//if no one is online, lead client to leave a msg
        }
    }
});
$('#chat-fasong').click(function () {
    if (online == '1') {
        send();
    } else {
        AutoReply(0, "");
    }
    return false;
})

/***
 * 
 * Dealing with the messages reiceved from weshop
 * 
 ***/
socket.on('weshop reconnected', function (status) {
    console.log('Weshop reload');
    if (status == 'Connected' && online == '1') {
    } else if (status == 'Connected' && online == '0') {
        //window.location.reload();
        reply("Bonjour, nous sommes sur ligne.");
        reply("Est-ce que je peux vous aider ?");
        online = 1;
    } else if (status == 'Disconnected' && online == '0') {

    } else if (status == 'Disconnected' && online == '1') {
        //window.location.reload();
        AutoReply(1, "");
        online = 0;
    }
    //window.location.reload();
    //reply('Weshop Reconnected');
});
socket.on('reply', function (data) {
    console.log(data);
    //var user = data['sender'];
    var msg = data['data'];
    reply(msg);
    $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
});

socket.on('user list', function (list) {
    console.log(list);
});

socket.listen();
//});
