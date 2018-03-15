<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ternary</title>
  </head>
  <body>
    <form action="ternaire.php" method="post">
    <p>Man or Woman? <br>
      <input type="radio" name="gender" value="male"> Male<br>
      <input type="radio" name="gender" value="female"> Female<br></p>
    <p><input type="submit" /></p>
    </form>
    <?php
$gender = htmlspecialchars($_POST['gender']);
$bonjour = $gender=='female' ? "Hello, beauty": "Hello, Man";
echo $bonjour;
 ?>
  </body>
</html>
