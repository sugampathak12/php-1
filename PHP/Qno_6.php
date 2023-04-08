<!DOCTYPE html>
<html>
<head>
	<title>Day of the Week</title>
</head>
<body>
	<?php
		if(isset($_POST['submit'])) {
			$day = $_POST['day'];
			if($day == 'Monday') {
				echo "Laugh on Monday, laugh for danger.";
			} elseif($day == 'Tuesday') {
				echo "Laugh on Tuesday, smile at a stranger.";
			} elseif($day == 'Wednesday') {
				echo "Laugh on Wednesday, laugh for a letter.";
			} elseif($day == 'Thursday') {
				echo "Laugh on Thursday, something better.";
			} elseif($day == 'Friday') {
				echo "Laugh on Friday, laugh for sorrow.";
			} elseif($day == 'Saturday') {
				echo "Laugh on Saturday, joy tomorrow.";
			} else {
				echo "Please enter a valid day of the week.";
			}
		} else {
	?>
	<form method="POST" action="">
		<label for="day">Enter a day of the week:</label>
		<input type="text" id="day" name="day">
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php } ?>
</body>
</html>
