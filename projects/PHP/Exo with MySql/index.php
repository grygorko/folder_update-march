<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>BeCode students</title>
</head>
<body>
  <h2>Are you a student Of Becode?</h2>
  <p>Add your info to my database, just for fun :)</p>
  <form enctype="multipart/form-data" action="form.php" method="POST">
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

  <p>Add your avatar</p>
  <p><input type="file" name="avatar" value=""></p>

  <p><input type="submit" name="submit" value="Add member"></p>

  </form>
</body>

</html>
