<?php
function calculateRectangleArea($length, $width) {
  $area = $length * $width;
  return "A rectangle of length $length and width $width has an area of $area.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $length = $_POST["length"];
  $width = $_POST["width"];

  $result = calculateRectangleArea($length, $width);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Rectangle Area Calculator</title>
  </head>
  <body>
    <h1>Rectangle Area Calculator</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <p>Please enter the values of the length and width of your rectangle.</p>
      <label for="length">Length:</label>
      <input type="number" name="length" id="length" required>
      <br>
      <label for="width">Width:</label>
      <input type="number" name="width" id="width" required>
      <br>
      <br>
      <button type="submit">Calculate Area</button>
    </form>

    <?php
    if (isset($result)) {
      echo "<p>" . $result . "</p>";
    }
    ?>
  </body>
</html>
