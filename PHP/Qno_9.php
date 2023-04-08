<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>

	<?php
	session_start();

	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		
		if($username == "user" && $password == "password") {
			// Set session variable
			$_SESSION['loggedIn'] = true;
			header("Location: welcome.php");
			exit;
		} else {
			echo "Invalid username or password.";
		}
	}
	?>

	<h2>Login Form</h2>

	<form method="POST">
		<label>Username:</label>
		<input type="text" name="username"><br>

		<label>Password:</label>
		<input type="password" name="password"><br>

		<input type="submit" name="submit" value="Login">
	</form>

</body>
</html>
