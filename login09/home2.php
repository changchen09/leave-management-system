<html>
<body>

<?php

session_start();
if($_SESSION["username"]) 
{

$i=($_SESSION["username"]);

echo $i;

?>
<?php }
?>
<table>
<tr>
<td><a href="signleave1.php?gid=<?php echo $i;?>" ><input id="button" type="submit" name="submit" value="approved leave"></a></td><br>


</tr>
<tr>
<td><a href="signleave2.php" ><input id="button" type="submit" name="submit" value="fresh leave"></a></td>
</tr>

<tr>
<td><a href="signleave3.php" ><input id="button" type="submit" name="submit" value="Rejected Leave"></a></td>
</tr>

<tr>
<td><a href="pwdreset.php" ><input id="button" type="submit" name="submit" value="change your password"></a></td>
</tr>
</table>
</body>
</html>