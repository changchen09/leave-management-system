<!DOCTYPE HTML>
<html>
<head>
<title>Sign-Up</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="body-color">
<?php

$uid=$_GET['gid'];

include('connection.php');




 $pql = "select * FROM websiteusers where uid='$uid' "; 
$result1 = mysql_query($pql,$con) or die(mysql_error());
$records = mysql_num_rows($result1);
while($row = mysql_fetch_array($result1, MYSQL_ASSOC))
{
$uid= $row['uid'];
$username= $row['userName'];
?>


<table border="2" align="center">

<form method="POST" action="connectivity-signleave.php">
<tr>
<td>UserId:</td><td><input type="text"name="uid" readonly value="<?php
echo $uid; ?>"> </td>
</tr>
<tr>
<td>Username:</td><td><input type="text"name="username"  readonly value="<?php
echo $username; ?>"> </td>
<?php
}
?></tr><tr>
<td>Type of leave</td>
<td>
<select name="selectleave" readonly>
<option selected="selected">casual leave</option>
<option >earned  leave</option>
<option >other leave</option>
</select>
</td>
</tr>
<td>Start date</td><td> <input type="date" name="sdate" required></td>
</tr>
<tr>
<td>End Date</td><td> <input type="date" name="edate" required></td>
</tr>
<tr>
<td>Designation</td><td> <input type="text" name="desig" required></td>
</tr>
<tr>
<td>Department</td><td> <input type="text" name="dept" required></td>
</tr>
<tr>
<td>Presently Posted</td><td> <input type="text" name="posted" required></td>
<tr>
<td>Duration of leave</td><td> <input type="text" name="durat" required></td>
</tr
</tr>
<tr>
<td>Mobile No.</td><td> <input type="text" name="mobile" required></td>
</tr>
<tr>
<td>Address During Leave</td><td><textarea  name="address" rows="3" cols="22" required>
</textarea></td>
</tr>
<tr>
<td>status</td><td> <input type="text" name="status" readonly value="new"required></td>
</tr>
<tr>
<td><input id="button" type="submit" name="submit" value="Apply"></td>
</tr>
</form>
</table>
</fieldset>
</div>
<a href="index.php" title="signup" target="blank"><font color="blue">click here to exit</font></a>
</body>
</html>