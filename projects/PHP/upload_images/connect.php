<?php

try{
$con = new PDO ("mysql:host=localhost;dbname=first_db","root","");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "connected";
}
catch(PDOException $e)
{
echo "error:".$e->getMessage();
}

?>
