<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function isPalindrome($str) {
       
        $str = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($str));
      
       
        $reversedStr = strrev($str);
      
        
        if ($str === $reversedStr) {
          return true;
        } else {
          return false;
        }
      }
      
      if (isPalindrome('racecar')) {
        echo 'racecar is a palindrome';
      } else {
        echo 'racecar is not a palindrome';
      }
      
    ?>
</body>
</html>