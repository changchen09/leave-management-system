
<html>
<body>
<form name="myform" method="post" action="update.php">
<?php

session_start();
if($_SESSION["username"]) 
{

$i=($_SESSION["username"]);



?>
<?php }
?>
<tr><td>Username:</td>
<td><input type="text" size="20" name="username" value="<?php echo $_SESSION["username"]; ?>" readonly></td></tr>
<tr><br><br>
<td>Enter your existing password:</td>
<td><input type="password" size="20" name="password"></td>
</tr>
<br><br>
 <tr>
<td>Enter your new password:</td>
<td>
<input type="password" size="20" name="newpassword" />
 </td> </tr><br><br>
<tr> <td>Confirm your new password:</td>
   <td> <input type="password" size="20" name="newpassword1"  /> </td></tr>
</table>
 <br><br>
<p align=""><input type="submit" value="Update Password" width="5%" height="5%">
    </form>
</body>
</html>