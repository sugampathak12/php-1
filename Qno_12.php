<!DOCTYPE html>
<html>
<head>
	<title>Displaying JSON Data in HTML Table using PHP</title>
	<style>
		table {
			border-collapse: collapse;
			width: 50%;
			margin: 0 auto;
		}
		table th, table td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		table th {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<h1>JSON Data displayed in HTML table using PHP</h1>
	<?php
		
		$jsonData = '[{"name":"John Garg","age":"15","school":"Ahlcon Public school"},{"name":"Smith Soy","age":"16","school":"St. Marie school"},{"name":"Charle Rena","age":"16","school":"St. Columba school"}]';

		$data = json_decode($jsonData, true);

		
		if(!empty($data)){
			echo "<table>";
			echo "<thead><tr><th>Name</th><th>Age</th><th>School</th></tr></thead>";
			echo "<tbody>";
			foreach($data as $row){
				echo "<tr><td>".$row['name']."</td><td>".$row['age']."</td><td>".$row['school']."</td></tr>";
			}
			echo "</tbody>";
			echo "</table>";
		} else {
			echo "No data found";
		}
	?>
</body>
</html>
