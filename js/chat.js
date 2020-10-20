const socket = $.websocket('ws://192.168.0.11:2000');
//var username = ip_client;
var username = ip_intern;

/***
 * 
 * Set up the function of auto scrolling
 * 
 ***/
function screenFuc() {
    var topHeight = $(".chatBox-head").innerHeight();//聊天头部高度
    //屏幕小于768px时候,布局change
    var winWidth = $(window).innerWidth();
    if (winWidth <= 768) {
        var totalHeight = $(window).height(); //页面整体高度
        //中间内容高度
        $(".chatBox-info").css("height", totalHeight - topHeight);
        $(".chatBox-content-demo").css("height", totalHeight - topHeight - 55);
        // $(".chatBox-list").css("height", totalHeight - topHeight-200);
        $(".chatBox-kuang").css("height", totalHeight - topHeight);
        $(".div-textarea").css("width", winWidth - 106);
    } else {
        $(".chatBox-info").css("height", 495);
        $(".chatBox-content").css("height", 448);
        $(".chatBox-content-demo").css("height", 448);
        $(".chatBox-list").css("height", 495);
        $(".chatBox-kuang").css("height", 495);
        // !import不可覆盖，以删除
        $(".div-textarea").css("width", 245);
    }
}
(window.onresize = function () {
    screenFuc();
})();

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
    //var socketID = uid;
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
function send() {
    var msg = $('#msg_client').val();
    if (msg != '') {
        repeatClientMsg(msg);
        socket.emit('client msg', array = {
            username: username,
            msg: msg
        });
    }
    $('#msg_client').val('');
    $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
}
$(window).keydown(function (evt) {
    if (evt.keyCode == 13) {
        if (online == '1') {
            send();
        } else {
            AutoReply(0, "");
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
    if (status == 'Connected') {
        window.location.reload();
        reply("Bonjour, nous sommes sur ligne.");
        reply("Est-ce que je peux vous aider ?");
    } else if (status == 'Disconnected') {
        AutoReply(1, "");
    }
    //window.location.reload();
    //reply('Weshop Reconnected');
});
socket.on('reply', function (data) {
    console.log(data);
    console.log(data['sender']);

    var user = data['sender'];
    var msg = data['data'];
    console.log(data);
    reply(msg);
    $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);

});

socket.on ('user list', function (list) {
   console.log(list); 
});


socket.listen();