
<?php // connect to the server and database

$connection=mysqli_connect('localhost','root','','BeCode');
if ($connection==false){echo mysqli_connect_error(); exit();} else {echo ";)";}
// create an request
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$birthyear=$_POST['birthyear'];
$genre=$_POST['genre'];
$ecole=$_POST['ecole'];

$request="INSERT INTO students (nom,prenom,birthyear,genre,ecole)
 VALUES ( :nom, :prenom, :birthyear, :genre, :ecole)";
 $statement= $connection->prepare($request);
 $statement->bindValue(":nom", $nom);
 $statement->bindValue(":prenom", $prenom);
 $statement->bindValue(":birthyear", $birthyear);
 $statement->bindValue(":genre", $genre);
 $statement->bindValue(":ecole", $ecole);

 // execute the request

 $success=$statement->execute();
 if ($success == TRUE) {
   header("location: form.php");
 } else {
 echo "Error!";}

  ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>BeCode students</title>
</head>
<body>
  <h2>Are you a student at Becode?</h2>
  <p>Add your info to my database, just for fun :)</p>
  <form action="" method="POST">
    <input type="text" name="nom" placeholder="Second name"><br>
    <input type="text" name="prenom" placeholder="First name"><br>
    <input type="text" name="birthyear" placeholder="Birth Year">
    <p>Gender? <br>
      <input type="radio" name="genre" value="M"> Male
      <input type="radio" name="genre" value="F"> Female</p>
    <input list="School" name="ecole" placeholder="School">
    <datalist id="School">
    <option value="Central">
    <option value="Charleroi">
  </datalist>
    <input type="submit" value="Add member">
  </form>
</body>

</html>
