<!-- code well commented
developed by :Ngwang Shalom 
problem solve: having a real time chat  system where 2 people can communicate with each other without refreshing their pages
programming languages :seen ad the side-->
<!DOCTYPE html>
<html>
<head>
	<title>Comments</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			// Fetch comments every 5 seconds
			setInterval(function() {
				$.ajax({
					url: 'get-comments.php',
					type: 'GET',
					success: function(data) {
						$('#comments').html(data);
					}
				});
			}, 5000);
			
			$('#comment-form').submit(function(event) {
				event.preventDefault();
				
				$.ajax({
					url: 'get-comments.php',
					type: 'POST',
					data: $(this).serialize(),
					success: function(data) {
						$('#comment-form')[0].reset();
						$.ajax({
							url: 'get-comments.php',
							type: 'GET',
							success: function(data) {
								$('#comments').html(data);
							}
						});
					}
				});
			});
		});
	</script>
	<style>
		.comment-container {
			border: 1px solid #ccc;
			margin-bottom: 10px;
			padding: 10px;
		}
		
		.comment-name {
			font-weight: bold;
			margin-right: 10px;
		}
		
		.comment-date {
			font-style: italic;
			font-size: 0.8em;
			margin-right: 10px;
		}
		
		.comment-text {
			margin-top: 5px;
		}
	</style>
</head>
<body>
	<h1>Comments</h1>
	
	<div id="comments">
		<!-- Comments will be dynamically loaded here -->
	</div>
	
	<form id="comment-form">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" required><br><br>
		
		<label for="comment">Comment:</label><br>
		<textarea id="comment" name="comment" rows="4" cols="50" required></textarea><br><br>
		
		<input type="submit" value="Submit">
	</form>
</body>
</html>
