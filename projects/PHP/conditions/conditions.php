

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo for conditions</title>
  </head>
  <body>
    <h2>Weather</h2>
    <?php
    $temperature=12;
    echo "Today is ".$temperature. " degree, So I will wear ";
    if ( $temperature  >=  15) {
    echo $clothes_of_day= " T-shirt. " ; } else { echo $daycloth= " Pullover. " ; }
          ?>
<h2>Exo 0</h2>
<?php $room_is_dirty= NULL;
if (isset($room_is_dirty)) { echo "Make your husband clean the room!"; } else { echo "Your husband can play vive";}
 ?>
 <br>
<?php $room_is_dirty="not";
if ($room_is_dirty=="very"){
  echo "Clean your room' immidiately!";
} elseif ($room_is_dirty=="so-so") {
  echo "Don't make mess in your room";
} else {echo "Do you wanna cake?";} ?>
<h2>Exo1</h2>
<?php $t=date("h:i");
echo $t;
if ($t>='05:00' AND $t<='09:00') {
  echo " Good morning!";
} else if ($t>='09:01' AND $t<='12:00') {
  echo " Have a nice day!";
} else if ($t>='12:01' AND $t<='16:00') {
  echo " Good afternoon!";}
  else if ($t>='16:01' AND $t<='21:00') {
    echo " Good evening!";
  } else { echo " Good night";}
 ?>
 <h2>Exo 2</h2>
 <form action="conditions.php" method="post">
 <p>What is your age? <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
</form>
<?php $age = (int)$_POST['age'];
if ($age <= 12) {
  echo "Hi little!";
} else if ( $age >12 AND $age <=18) {
  echo "Hello Teen!";
} else if ( $age >18 AND $age <=115) {
  echo "Hello Adult!";
} else {
  echo "wow, still alive?!";
}?>
<h2>Exo 3</h2>
<form action="conditions.php" method="post">
<p>What is your age? <input type="text" name="age" /></p>
<p>Man or Woman? <br>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br></p>
<p><input type="submit" /></p>
</form>
<?php $age = (int)$_POST['age'];
$gender = htmlspecialchars($_POST['gender']);
if ($age <= 12) {
  if (isset($gender)&& $gender=="female") {
      echo "Hi little girl!";
  } else {echo "Hi little boy!"; }
} else if ( $age >12 AND $age <=18) {
  if (isset($gender)&& $gender=="female") {
      echo "Hi Teen girl!";
  } else {echo "Hi Teen boy!"; }
}  else if ( $age >18 AND $age <=115) {
  if (isset($gender)&& $gender=="female") {
      echo "Hi Adult girl!";
  } else {echo "Hi Adult boy!"; }
}  else {
  echo "wow, still alive?!";
}
// could create a function to shorten the code
?>
<h2>Exo 4</h2>
<form action="conditions.php" method="post">
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
if ($age <= 12) {
  if (isset($gender)&& $gender=="female") {
    if (isset($lang)&& $lang=="yes") {
        echo "Hi little girl!";
    } else { echo "Bonjour, petite fille";}
  }  else if (isset($gender)&& $gender=="male") {
    if (isset($lang)&& $lang=="yes")
   {echo "Hi little boy!"; } else {
     echo "Bonjour, petite fils";}
  }
} else if ( $age >12 AND $age <=18 ) {
  if (isset($gender)&& $gender=="female") {
    if (isset($lang)&& $lang=="yes") {
        echo "Hi teen girl!";
    } else { echo "Bonjour, teen fille";}
  }  else if (isset($gender)&& $gender=="male") {
    if (isset($lang)&& $lang=="yes")
   {echo "Hi teen boy!"; } else {
     echo "Bonjour, teen fils";}
  }
}  else if ( $age >18 AND $age <=115 ) {
  if (isset($gender)&& $gender=="female") {
    if (isset($lang)&& $lang=="yes") {
        echo "Hi adult girl!";
    } else { echo "Bonjour, adult fille";}
  }  else if (isset($gender)&& $gender=="male") {
    if (isset($lang)&& $lang=="yes")
   {echo "Hi adult boy!"; } else {
     echo "Bonjour, adult fils";}
  }
}  else {
  echo "wow, still alive?!";
}
?>

  </body>
</html>
