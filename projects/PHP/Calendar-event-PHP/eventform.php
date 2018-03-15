<form class="eventform" action=" <?php $_SERVER["PHP_SELF"];?>?month=<?php echo $month;?>&day=<?php echo $day;?>&year=<?php echo $year;?>&v=true&add=true " method="POST">
  <table width='400px;'>
    <tr>
      <td width='150px;'>Title</td>
      <td width='250px;'><input type="text" name="txttitle" value=""> </td>
    </tr>
    <tr>
      <td width='150px;'>Detail</td>
      <td width='250px;'><textarea name="txtdetail" rows="8" cols="30"></textarea> </td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="btnadd" value="Add Event"> </td>
    </tr>
  </table>
</form>
