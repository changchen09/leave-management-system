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




 $pql = "select * FROM admin where uid='$uid' and action='approve' "; 
$result1 = mysql_query($pql,$con) or die(mysql_error());
$records = mysql_num_rows($result1);
while($row = mysql_fetch_array($result1, MYSQL_ASSOC))
{
	$id= $row['id'];
$uid= $row['uid'];
$username= $row['username'];
$selectleave= $row['aleave'];
$sdate= $row['sdate'];
$edate= $row['edate'];
$desig= $row['desig'];
$dept= $row['dept'];
$posted= $row['posted'];
$durat= $row['durat'];
$mobile= $row['mobile'];
$address= $row['address'];
$action= $row['action'];
$reason= $row['reason'];
$days= $row['days'];
?>

<table border="1"align="center"name="table">

<form method="POST" action="leaveaction.php">

<tr>
<td>UserId:</td><td><input type="text"name="uid" readonly value="<?php
echo $uid; ?>"> </td></tr>

<td>Username:</td><td><input type="text"name="username" readonly  value="<?php
echo $username; ?>"> </td></tr>
<td>type of leave:</td><td><input type="text"name="selectleave" readonly  value="<?php
echo $selectleave; ?>"> </td></tr>

<td>start date:</td><td><input type="text"name="sdate" readonly  value="<?php
echo $sdate; ?>"> </td></tr>

<td>end date:</td><td><input type="text"name="edate" readonly  value="<?php
echo $edate; ?>"> </td></tr>
<td>designation:</td><td><input type="text"name="desig" readonly  value="<?php
echo $desig; ?>"> </td></tr>

<td>department:</td><td><input type="text"name="dept" readonly  value="<?php
echo $dept; ?>"> </td></tr>
<td>Posted at:</td><td><input type="text"name="posted" readonly value="<?php
echo $posted; ?>"> </td></tr>
<td>duration:</td><td><input type="text"name="durat" readonly  value="<?php
echo $durat; ?>"> </td></tr>

<td>mobile:</td><td><input type="text"name="mobile" readonly value="<?php
echo $mobile; ?>"> </td></tr>

<td>Address:</td><td><input type="text"name="address" readonly value="<?php
echo $address; ?>"> </td></tr>
<td>Action taken</td><td><input type="text"name="action" readonly value="<?php
echo $action; ?>"> </td></tr>

<tr><td>Reason if any</td><td><textarea name="reason" rows="10" cols="21" readonly value="<?php
echo $reason; ?>"> </textarea></td>
<tr><td>leave approved for(days)</td><td><input type="text" name="days"  readonly value="<?php
echo $days; ?>"> </td></tr>
<tr><td></td><td>

</tr>
<br><br>




<?php
}
?>

</table>



</fieldset>
</div>

</body>
</html>