<?php include 'database.php'; ?>
<?php
	//Create Select Query
	$query = "SELECT * FROM chats ORDER BY id DESC";
	$chats = mysqli_query($conn, $query);
?>
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

			<div id="chats">
				<ul>
					<?php while($row = mysqli_fetch_assoc($chats)) : ?>
						<li><?php echo $row['name']; ?>: <?php echo $row['chat']; ?> (<?php echo $row['date']; ?>)</li>
				<?php endwhile; ?>
				</ul>
			</div>

			<footer>
				<form>
					<label>Name: </label>
					<input type="text" id="name">

					<label>Chat Text</label>
					<input type="text" id="chat">
					<input type="submit" id="submit" value="SEND">
				</form>
			</footer>
		</div>
	</body>
</html>