const socket = $.websocket('ws://192.168.1.100:2000');
var username = ip_client;
//var username = ip;
/*
 * dealing with the messages reiceved from weshop
 */
socket.on('weshop reconnected', function () {
    $('.chatBox-content-demo').append(reply('weshop reconnected'));
});
socket.on('im user', function (data) {
    console.log(data);
    console.log(data['sender']);

    user = data['sender'];
    msg = data['data'];
    console.log(data);
    reply(msg);
    //chatwith(user);
    //$("#" + user).chatbox("option", "boxManager").addMsg(user, msg);

});
/*
 * if the client click the button of fasong or enter, do the send event
 * function of sending message from client to the server
 *
 */
function send() {
    var msg = $('#msg_client').val();
    repeatClientMsg(msg);
    socket.emit('client msg', array = {
        username: username,
        msg: msg
    });
    $('#msg_client').val('');
    //socket.emit('add user', username);
}
$(window).keydown(function (evt) {
    if (evt.keyCode == 13) {
        send();
    }
});
$('#chat-fasong').click(function () {
    send();
    return false;
});

/*
 * 
 */
socket.on('chat message', function (msg) {
    reply(msg);
});
//once a new client connected, let us know
socket.on('connect', function (user) {
    repeatClientMsg('my ID : ' + user);
    socket.emit('add user', username);
});
socket.on('new client', function (uid) {
    $('.chatBox-content-demo').append(reply('new client : ' + uid));
});

socket.listen();