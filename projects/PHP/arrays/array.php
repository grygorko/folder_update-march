<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My family</title>
  </head>
  <body>
    <?php
    $family = array('mama', 'papa', 'sis', 'niece', 'vlad');
    print_r($family); echo '<br/>';
    ?>

<?php $films= array('inception', 'transcendency', 'fight club');
echo " My favorite movie is ". $films[1]; ?>
    <h2>Foreach</h2>
<?php
$pronoms_personnels = array
('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
foreach ($pronoms_personnels as $value) {
  echo $value. "<br/>";
}
?>

<?php
$pronoms_personnels = array
('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
foreach ($pronoms_personnels as $value) {
  if ($value == 'Je') {
    echo "Je code <br/>";
  } elseif ($value == 'Tu') {
    echo "Tu codes <br/>";
  }
  elseif ($value == 'Il/Elle') {
    echo "Il/Elle code <br/>";
  }
  elseif ($value == 'Nous') {
    echo "Nous codons";
  }
  elseif ($value == 'Vous') {
    echo "Vous codez <br/>";
  }
  elseif ($value == 'Elles/Ils') {
    echo "Elles/Ils codent <br/>";
  }
}
?>
<form action="array.php" method="POST">
  <p> <strong>Add your verb with ending "er"</strong></p>
  <input type="text" name="verb" value="">
  <p><input type="submit" name="" value="Submit">   </p>
</form>
<?php
$verb= htmlspecialchars($_POST['verb']);
$verb1=substr($verb,0,-2);
$pps = array
('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
$ends = array ( 'e','es','e','ons', 'ez', 'ent');
  for( $i = 0; $i < count($pps); $i++){
        $pp = $pps[$i]. " " .$verb1.$ends[$i];
        echo $pp . "<br/>";
  }
?>
<?php $class = array('Jaquelline','Shvanova', 'Symeon', 'Glenn', 'Marine', 'Corentine', "Johnatan" );
for ($i=0; $i<count($class); $i++){
  echo "<br/> People in my class: <br/> ".$class[$i]. "<br/>";
} ?>


<?php $sto2cat=1;
while ($sto2cat<=120){
  echo $sto2cat."<br/>";
  $sto2cat++;
} ?>
<?php $i=1;
for ($i=1; $i<=120; $i++){
  echo $i. "<br/>";
} ?>

  </body>
</html>
