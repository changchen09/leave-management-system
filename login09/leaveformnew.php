<!DOCTYPE HTML>
<html>
<head>
<title>Sign-Up</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="body-color">
<?php

$id=$_GET['gid'];


include('connection.php');

 $pql = "select * FROM employ where id='$id'";
$result1 = mysql_query($pql,$con) or die(mysql_error());
$records = mysql_num_rows($result1);
while($row = mysql_fetch_array($result1, MYSQL_ASSOC))
{
	$id= $row['id'];
$uid= $row['uid'];
$username= $row['uname'];
$selectleave= $row['aleave'];
$sdate= $row['sdate'];
$edate= $row['edate'];
$desig= $row['desig'];
$dept= $row['dept'];
$posted= $row['posted'];
$durat= $row['durat'];
$mobile= $row['mobile'];
$address= $row['address'];
$status= $row['status'];
?>


<table border="3" align="center">

<form method="POST" action="leaveaction.php">

<tr>
<td>Id:</td><td><input type="text"name="id" readonly  value="<?php
echo $id; ?>"> </td></tr>

<br>
<br><br><br><br><br><br>
<tr>
<td><b>UserId:</td><td><input type="text"name="uid" readonly  value="<?php
echo $uid; ?>"> </td></tr>

<td>Username:</td><td><input type="text"name="username"readonly  value="<?php
echo $username; ?>"> </td></tr>
<td>type of leave:</td><td><input type="text"name="selectleave"readonly  value="<?php
echo $selectleave; ?>"> </td></tr>

<td>start date:</td><td><input type="text"name="sdate"readonly  value="<?php
echo $sdate; ?>"> </td></tr>

<td>end date:</td><td><input type="text"name="edate"readonly  value="<?php
echo $edate; ?>"> </td></tr>
<td>designation:</td><td><input type="text"name="desig"readonly  value="<?php
echo $desig; ?>"> </td></tr>

<td>department:</td><td><input type="text"name="dept"readonly  value="<?php
echo $dept; ?>"> </td></tr>
<td>Posted at:</td><td><input type="text"name="posted"readonly  value="<?php
echo $posted; ?>"> </td></tr>
<td>duration:</td><td><input type="text"name="durat"readonly  value="<?php
echo $durat; ?>"> </td></tr>

<td>mobile:</td><td><input type="text"name="mobile"readonly  value="<?php
echo $mobile; ?>"> </td></tr>

<td>Address:</td><td><input type="text"name="address"readonly  value="<?php
echo $address; ?>"> </td></tr>
<td>Status:</td><td><input type="text"name="status"readonly value="<?php
echo $status; ?>"> </td></tr>
<tr><td>
Action taken</td><td><select name="action" required>
<option></option>
<option>Approve</option>
<option>Reject</option></select>
</td></tr>
<tr><td>Reason if any</td><td><textarea name="reason" rows="3" cols="22"></textarea></td>
<tr><td>leave approved for(days)</td><td><input type="text" name="days" required></td></tr>
<tr><td></td><td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" value="Submit" /></td>
</tr>

<?php
}
?>
</table>


</body>
</html>