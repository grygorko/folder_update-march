<?php try{
$con = new PDO ("mysql:host=localhost;dbname=fillrouge","root","");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "_________________________________________";
}
catch(PDOException $e)
{
echo "error:".$e->getMessage();
}
 ?>
