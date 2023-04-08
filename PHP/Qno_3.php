<!DOCTYPE html>
<html>
<head>
	<title>Looping Through Associative Array</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Key</th>
				<th>Value</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$a = array('One' => 'Cat', 'Two' => 'Dog', 'Three' =>'Elephant', 'Four' => 'fox');

				foreach ($a as $key => $value) {
					echo "<tr><td>$key</td><td>$value</td></tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>
