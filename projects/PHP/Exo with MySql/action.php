<?php
require "connection.php";
// display all
 $displayAll= mysqli_query($connection, "SELECT * FROM `students`");
 while (($result = mysqli_fetch_assoc($displayAll))){
   echo '<hr>'; print_r($result);
 }
 mysqli_close($connection);

require "connection.php";
// display just first names
$displayPrenom= mysqli_query($connection, "SELECT * FROM `students`");
while (($result = mysqli_fetch_assoc($displayPrenom))){
  echo '<hr>'; print_r($result['prenom']);
}
 mysqli_close($connection);

 // display just avatars
 include "connection.php";
 $displayAvatar= mysqli_query($connection, "SELECT `avatar` FROM
`students` WITH `id`='idstudent'" );
 while (($result = mysqli_fetch_array($displayAvatar))){
   mysqli_result($displayAvatar);
 }
  mysqli_close($connection);
 ?>
