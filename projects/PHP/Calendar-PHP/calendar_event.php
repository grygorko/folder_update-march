<?php
$day= date("j");
$month = date("n");
$year = date("Y");

$currentTimeStamp = strtotime("$year-$month-$day");
$monthName = date("F", $currentTimeStamp);
$numDays = date("t", $currentTimeStamp);
$counter=0;

 ?>
<!DOCTYPE html>
<html>

<head>
  <link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
  <table>
    <tr>
      <td></td>
      <td colspan="5"> <?php echo $monthName. ",".$year ?></td>
      <td></td>
    </tr>
    <tr>
      <td>Mon</td>
      <td>Tue</td>
      <td>Wed</td>
      <td>Thu</td>
      <td>Fri</td>
      <td>Sat</td>
      <td>Sun</td>
    </tr>
    <?php echo <tr>
    for ($i=1; $i < $numDays+1 ; $i++, counter++) {
         $timestamp = strtotime("$year-$month-$i");
         if ($i==1) {
       $firstDay=date("w",$timeStamp);
     for ($j=0; $j < $firstDay; $j++, $counter++) {
       echo "<td> &nbsp; </td>";
    }
  }
  if ($counter %7==0) {
    echo "</tr><tr>";
  }
}
          echo </tr>
     ?>
  </table>

</body>

</html>
