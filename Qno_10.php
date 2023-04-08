<!DOCTYPE html>
<html>
<head>
	<title>Area of Rectangle</title>
</head>
<body>
	<h1>Calculate the area of a rectangle</h1>
	<form method="post">
		<label for="width">Width:</label>
		<input type="number" name="width" id="width" required><br><br>
		<label for="height">Height:</label>
		<input type="number" name="height" id="height" required><br><br>
		<input type="submit" value="Calculate">
	</form>

	<?php
		function calculate_area($l, $w) {
			$area = $l * $w;
			echo "A rectangle of length $l and width $w has an area of $area.";
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$width = $_POST["width"];
			$height = $_POST["height"];
			calculate_area($width, $height);
		}
	?>
</body>
</html>
