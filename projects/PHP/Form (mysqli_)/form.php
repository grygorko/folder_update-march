
<?php // connect to the server and database
$nom= $_POST['nom'];
$prenom= $_POST['prenom'];
$birthyear= $_POST['birthyear'];
$genre= $_POST['genre'];
$ecole=$_POST['ecole'];
$avatar=$_FILES['avatar']['name'];
$folder="./images";
$path = $folder . $avatar ;
$target=$folder.basename($_FILES['avatar']['name']);
$imageFileType=pathinfo($target,PATHINFO_EXTENSION);
$allowed=array('jpeg','png' ,'jpg');
include "connection.php";
$ext=pathinfo($avatar, PATHINFO_EXTENSION);
if(!in_array($ext,$allowed) )

{

 echo "Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";

}

else{

move_uploaded_file( $_FILES['image'] ['tmp_name'], $path);

$sth=$connection->prepare("insert into users(image)values(:image) ");

$sth->bindParam(':image',$image);

$sth->execute();

}


// create an request
if (! empty($_POST)){
  $request="INSERT INTO students (nom,prenom,birthyear,genre,ecole,avatar)
   VALUES ('{$connection->real_escape_string($nom)}',
   '{$connection->real_escape_string($prenom)}',
   '{$connection->real_escape_string($birthyear)}',
   '{$connection->real_escape_string($genre)}',
   '{$connection->real_escape_string($ecole)}',
   '{$connection->real_escape_string($avatar)}'
 )";
  $insert = $connection->query($request);
  if ($insert == TRUE) {
    echo "<hr> Thank you, your info now in my database";
  } else { echo "<hr> There was an error";
    die();
  }
  $connection->close();
}



  ?>
