<html>
<body>
<h3>your user id is:</h3>
<?php

session_start();
if($_SESSION["uid"]) 
{

$i=($_SESSION["uid"]);

echo $i;

?>
<?php }
?>
<br>
<table>
<tr>
<td><a href="signleave.php?gid=<?php echo $i;?>" ><input id="button" type="submit" name="submit" value="apply for fresh leave"></a></td>


</tr>
<tr>
<td><a href="leaveappr.php?gid=<?php echo $i;?>" ><input id="button" type="submit" name="submit" value="leave approved"></td>
</tr>
<tr>
<td><a href="leaverej.php?gid=<?php echo $i;?>"><input id="button" type="submit" name="submit" value="leave rejected"></td></tr>
<tr>
<td><a href="leavepen.php?gid=<?php echo $i;?>" ><input id="button" type="submit" name="submit" value="leave pending"></td>

</tr>
</table>
<a href="index.php" title="signup" target="blank"><font color="blue">click here to exit</font></a>
</body>
</html>