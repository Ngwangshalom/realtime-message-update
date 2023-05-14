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

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$comment = $_POST['comment'];
		$date = date('Y-m-d H:i:s');

		$sql = "INSERT INTO comments (name, comment, date) VALUES ('$name', '$comment', '$date')";
		$result = mysqli_query($conn, $sql);

		if (!$result) {
			die("Error: " . mysqli_error($conn));
		}
	}

	$sql = "SELECT * FROM comments ORDER BY id DESC";
	$result = mysqli_query($conn, $sql);

	if (!$result) {
		die("Error: " . mysqli_error($conn));
	}

	while ($row = mysqli_fetch_assoc($result)) {
		echo "<div class='comment-container'>";
		echo "<span class='comment-name'>" . $row['name'] . "</span>";
		//echo "<span class='comment-date'>" .('F j, Y g:i a', strtotime($row['date'])) . "</span>";
		echo "<p class='comment-text'>" . $row['comment'] . "</p>";
		echo "</div>";
	}

	mysqli_close($conn);
?>
