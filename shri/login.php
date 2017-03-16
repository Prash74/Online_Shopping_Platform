<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title>Login</title>
	</head>

	<body>
		<h2>Login to your account</h2>
		<form action="checklogin.php" method="post">
			<input type="text" placeholder="UserName" name="usrname"/>
			<input type="password" placeholder="Password" name="pwd"/>
			<button type="submit" class="btn btn-default">Login</button>
		</form>
	</body>
</html>