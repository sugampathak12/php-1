<!DOCTYPE html>
<html>
<head>
	<title>City and Country</title>
</head>
<body>
	<?php
		
		$cities = array(
			'Nepal' => 'Kathmandu',
			'Japan' => 'Tokyo',
			'Mexico' => 'Mexico City',
			'USA' => 'New York City',
			'India' => 'Mumbai',
			'Korea' => 'Seoul',
			'China' => 'Shanghai',
			'Nigeria' => 'Lagos',
			'Argentina' => 'Buenos Aires',
			'Egypt' => 'Cairo',
			'England' => 'London'
		);

		
		if(isset($_POST['submit'])) {
			$city = $_POST['city'];
			$country = array_search($city, $cities);
			echo "<p>$city is in $country.</p>";
		}
	?>

	<form method="post" action="">
		<label>Please choose a city:</label>
		<select name="city">
			<?php
				
				foreach($cities as $country => $city) {
					echo "<option value='$city'>$city, $country</option>";
				}
			?>
		</select>
		<button type="submit" name="submit">Submit</button>
	</form>

</body>
</html>
