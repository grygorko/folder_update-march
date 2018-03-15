
<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<form method="GET">
<input type="text" name="num1" placeholder="number 1">
<input type="text" name="num2" placeholder="number 2">
<select name="operator">
<option>none</option>
<option>add</option>
<option>subtract</option>
<option>multiply</option>
<option>divide</option>
</select>
<br>
<button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p> The Answer is: </p>
<?php
if (isset($_GET['submit'])) {
  $result1 = $_GET['num1'];
  $result2 = $_GET['num2'];
  $operator = $_GET['operator'];
  switch ($operator) {
 case "none":
  echo "error";
  break;
 case "add":
  echo $result1 + $result2;
  break;

 case "subtract":
  echo $result1 - $result2;
  break;

 case "multiply":
 echo $result1 * $result2;
  break;

 case "divide":
  echo $result1 / $result2;
  break;
}
}
?>
</body>
</html>﻿
