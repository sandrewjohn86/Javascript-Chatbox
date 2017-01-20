$(document).ready(function(){
	$('#submit').on('click', function(){
		var name = $('#name').val();
		var chat = $('#chat').val();
		var date = getData();
		var dataString = '&name=' + name + '&chat=' + chat + '&date=' + date;
		
		//validation
		if (name == '' || chat == ''){
			alert('Please fill in your name and chat');	
		} else {
			$.ajax({
				type: "POST",
				url: "../chatbox.php",
				data: dataString,
				cache: false,
				success: function(html){
					$('#chats ul').prepend(html);
				}
			});
		}

		return false;
	});
});

function getDate(){
	var date;
	date = new Date;
	date = date.getUTCFullYear() + '-' +
		('00' + (date.getUTCMonth() + 1)).slice(-2) + '-' +
		('00' + date.getUTCDate()).slice(-2) + ' ' +
		('00' + date.getUTCHours()).slice(-2) + ':' +
		('00' + date.getUTCMinutes()).slice(-2) + ':' +
		('00' + date.getUTCSeconds()).slice(-2);

		return date;
}