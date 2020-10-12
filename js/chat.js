const socket = $.websocket('ws://192.168.0.11:2000');
//var username = ip_client;
var username = ip_intern;

/***
 * 
 * When a client visit our site
 * send back their IP as their name and store their info
 * 
 ***/
socket.on('connect', function (user) {
    console.log('socket ID : ' + user);
    console.log('IP : ' + username);
    socket.emit('add user', username);
});

/***
 * 
 * Part of sending msg to weshop
 * function of sending message from client to the server
 * and the server will send the msg properly to weshop
 *
 ***/
function send() {
    var msg = $('#msg_client').val();
    if ( msg != '') {
        repeatClientMsg(msg);
        socket.emit('client msg', array = {
            username: username,
            msg: msg
        });
    }
    $('#msg_client').val('');
}
$(window).keydown(function (evt) {
    if (evt.keyCode == 13) {
        send();
    }
});
$('#chat-fasong').click(function () {
    send();
    return false;
})

/***
 * 
 * Dealing with the messages reiceved from weshop
 * 
 ***/
socket.on('weshop reconnected', function () {
    console.log('Weshop reconnected');
    //$('.chatBox-content-demo').append(reply('Weshop Reconnected'));
});
socket.on('reply', function (data) {
    console.log(data);
    console.log(data['sender']);

    var user = data['sender'];
    var msg = data['data'];
    console.log(data);
    reply(msg);
});

//socket.on ('user list', function (list) {
//   console.log(list); 
//});

socket.listen();