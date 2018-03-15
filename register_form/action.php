<?php // connect to the server and database
include "connection.php";
// ∕∕create variables
if(isset($_POST['submit'])) {
$nom= $_POST['nom'];
$prenom= $_POST['prenom'];
$email=$_POST['email'];
$password= $_POST['password'];
$gender= $_POST['gender'];
$birthyear= $_POST['birthyear'];
$secret_q= $_POST['secret_q'];
$secret_a= $_POST['secret_a'];
$avatar=$_FILES['avatar']['name'];
$folder="./images/avatar/";
$path = $folder . $avatar ;
$target=$folder.basename($_FILES['avatar']['name']);
$imageFileType=pathinfo($target,PATHINFO_EXTENSION);
$allowed=array('jpeg','png' ,'jpg');
$ext=pathinfo($avatar, PATHINFO_EXTENSION);
// ∕∕test
if(!in_array($ext,$allowed) )
{
 echo "Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";
}
else{
copy( $_FILES['avatar'] ['tmp_name'], $path);
$request="INSERT INTO user (nom,prenom,email,password, gender, birthyear,secret_q,secret_a,avatar)
 VALUES ( :nom, :prenom, :email, :password, :gender, :birthyear, :secret_q, :secret_a, :avatar)";
$sth=$con->prepare($request);
$sth->bindParam(":nom", $nom);
$sth->bindParam(":prenom", $prenom);
$sth->bindParam(":email", $email);
$sth->bindParam(":password", $password);
$sth->bindParam(":gender", $gender);
$sth->bindParam(":birthyear", $birthyear);
$sth->bindParam(":secret_q", $secret_q);
$sth->bindParam(":secret_a", $secret_a);
$sth->bindParam(':avatar',$avatar);

// $sth->execute();
$success=$sth->execute();
  if ($success == TRUE) {
    echo "<hr> Merci";
  } else { echo "<hr> There was an error";
    die();
  }
  $sth->closeCursor();
  //everytime close the request, to prepare for new request
}
}
  ?>
