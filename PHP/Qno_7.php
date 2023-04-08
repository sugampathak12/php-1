<html>
<head>
	<title>City List</title>
</head>
<body>
	<?php
		
		$cities = array('Kathmandu', 'Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London');

	
	echo implode(", ", $cities);

	
	sort($cities);
	echo "<ul>";
	foreach ($cities as $city) {
		echo "<li>$city</li>";
	}
	echo "</ul>";

	$cities = array_merge($cities, array('Los Angeles', 'Calcutta', 'Osaka', 'Beijing'));
	sort($cities);

	echo "<ul>";
	foreach ($cities as $city) {
		echo "<li>$city</li>";
	}
	echo "</ul>";
?>
</body>
</html>