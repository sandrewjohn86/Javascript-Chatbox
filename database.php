<?php
	//connect to MySQL
	$conn = mysqli_connect("127.0.0.1","stephen_test", "engineering01", "jschatbox");

	if (mysqli_connect_errno()) {
		echo 'Failed to connect: '.mysqli_connect_errno();
	}
