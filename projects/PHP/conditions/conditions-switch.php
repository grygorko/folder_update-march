<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Switch</title>
  </head>
  <body>
    <h2>Exo-6</h2>
    <form action="conditions-switch.php" method="post">
    <p>What is your age? <input type="text" name="age" /></p>
    <p>Man or Woman? <br>
      <input type="radio" name="gender" value="male"> Male<br>
      <input type="radio" name="gender" value="female"> Female<br></p>
      <p>Do you speak English? <br>
        <input type="radio" name="lang" value="yes"> Yes <br>
        <input type="radio" name="lang" value="no"> No <br></p>
    <p><input type="submit" /></p>
    </form>
    <?php $age = (int)$_POST['age'];
    $gender = htmlspecialchars($_POST['gender']);
    $lang = htmlspecialchars($_POST['lang']);
    switch ([TRUE, $gender, $lang]) {
      case [$age<=12, 'female', 'yes' ]:
            echo "Hi little girl!";
            break;
      case [$age<=12, 'female', 'no' ]:
              echo "Bonjour, petite fille";
              break;
      case [$age<=12, 'male', 'yes' ]:
          echo "Hi little boy!";
          break;
      case [$age<=12, 'male', 'no' ]:
              echo "Bonjour, petite fils";
              break;
      case [($age >12 && $age <=18), 'female', 'yes']:
            echo "Hi teen girl!";
            break;
      case [($age >12 && $age <=18), 'female', 'no']:
            echo "Bonjour Teen fille";
              break;
      case [($age >12 && $age <=18), 'male', 'yes']:
          echo "Hi teen boy!";
              break;
      case [($age >12 && $age <=18), 'male', 'no']:
         echo "Bonjour, teen fils";
          break;
      case [($age >18 && $age <=115), 'female', 'yes']:
          echo "Hi Adult girl!";
          break;
      case [($age >18 && $age <=115), 'female', 'no']:
          echo "Bonjour Adult fille";
          break;
      case [($age >18 && $age <=115), 'male', 'yes']:
          echo "Hi Adult boy!";
          break;
      case [($age >18 && $age <=115), 'male', 'no']:
          echo "Bonjour, Adult fils";
          break;
      default:
      echo "wow, still alive?!";
    }
    ?>
<h2>Exo-7</h2>
<form action="conditions-switch.php" method="post">
<p>What is your age? <input type="text" name="age" /></p>
<p>Man or Woman? <br>
  <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br></p>
<p><input type="submit" /></p>
</form>
<?php $age = (int)$_POST['age'];
$gender = htmlspecialchars($_POST['gender']);
$right1="yes, we were looking for you!";
$wrong="no, you are not good enough!";
if ($age>=21 AND $age<40 AND ($gender=='female')){
  echo $right1;
} else {
  echo $wrong;
}
  ?>
  <h2>Exo-8</h2>
  <form action="conditions-switch.php" method="post">
  <p>What is your age? <input type="text" name="age" /></p>
  <p>Man or Woman? <br>
    <input type="radio" name="gender" value="male"> Male<br>
    <input type="radio" name="gender" value="female"> Female<br></p>
  <p><input type="submit" /></p>
  </form>
  <?php $age = (int)$_POST['age'];
  $gender = htmlspecialchars($_POST['gender']);
  $right1="yes, we were looking for you!";
  $wrong="no, you are not good enough!";
  if ($age>=21 AND $age<40 AND ($gender=='female')){
    echo $right1;
  }
    ?>

  </body>
</html>
