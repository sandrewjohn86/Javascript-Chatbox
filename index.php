<!DOCTYPE html>
<html>
	<head>
		<title>JS Chatbox</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>

	</head>
	<body>
		<div id="container">
			<header>
				<h1>JS Chatbox</h1>
			</header>

			<dir id="chats">
				<ul>
					<li></li>
				</ul>
			</dir>

			<footer>
				<form>
					<label>Name: </label>
					<input type="text" id="name">
					<label>Chat Text</label>
					<input type="text" id="chat">
					<input type="submit" id="submit" value="CHAT!">
				</form>
			</footer>
		</div>
	</body>
</html>