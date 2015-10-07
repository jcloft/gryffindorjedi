var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var nicknames = [];

http.listen(3000, function(){
		console.log('listening on *:3000');
})

app.get('/', function(req, res){
	res.sendFile( __dirname + '/index.html');
});

io.on('connection', function(socket){
	
	 function updateUsernames()
	{
		io.emit('usernames', nicknames);
	}
	
	socket.on('chat message', function(data){
		io.emit('chat message', {msg: data, nick: socket.nickname});
		//io.broadcast.emit("chat message", msg);
		//sends message out to everyone except sender
	});
	
	socket.on('new user', function(data, callback){
		
		if(nicknames.indexOf(data) != -1){
			callback(false);
		} else{
			callback(true);
			socket.nickname = data;
			nicknames.push(socket.nickname);
			updateUsernames();
		}
	
	});
	
	
	
	socket.on('disconnect', function(data){
    		
    		if(!socket.nickname) return;
    		
    		nicknames.splice(nicknames.indexOf(socket.nickname), 1);
    		updateUsernames();
    		
    });
    
   
	
});

