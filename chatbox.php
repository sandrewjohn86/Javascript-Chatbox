<?php include 'database.php'; ?>

<?php
	if (isset($_POST['name']) && isset($_POST['chat'])){
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$chat = mysqli_real_escape_string($conn, $_POST['chat']);
		$date = mysqli_real_escape_string($conn, $_POST['date']);

		//set Timezone
		date_default_timezone_set('America/New_York');
		$date = date('h:i:s a',time());

		$query = "INSERT INTO chats (name, chat, date) VALUES ('$name','$chat','$date')";

		if (!mysqli_query($conn, $query)){
			echo 'Error:'.mysql_error($con);
		}else{
			echo '<li>'.$name.': '.$chat.' ['.$date.'] </li>';
		}
	}