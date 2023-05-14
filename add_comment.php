<?php
	session_start();
	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "whap_shorts";
	$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$name = $_POST['name'];
	$comment = $_POST['comment'];
	
	$sql = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";
	
	if (mysqli_query($conn, $sql)) {
		echo "Comment added successfully!";
	} else {
		echo "Error: " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>
