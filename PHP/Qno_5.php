<!DOCTYPE html>
<html>
<head>
	<title>Favorite City</title>
</head>
<body>
	<?php
		if(isset($_POST['submit'])) {
			$city = $_POST['city'];
			echo "Your favorite city is $city.";
		} else {
	?>
	<form method="POST" action="">
		<label for="city">What is your favorite city?</label>
		<input type="text" id="city" name="city">
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php } ?>
</body>
</html>
