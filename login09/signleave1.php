<!DOCTYPE HTML>
<html>
<head>
<title>Sign-Up</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="body-color"><table border="2">
<?php



include('connection.php');




 $pql = "select * FROM employ where status='Approve' "; 
$result1 = mysql_query($pql,$con) or die(mysql_error());
$records = mysql_num_rows($result1);
while($row = mysql_fetch_array($result1, MYSQL_ASSOC))
{
$id= $row['id'];
$uid= $row['uid'];
$username= $row['uname'];
$desig= $row['desig'];
$dept= $row['dept'];
?>




<form method="POST" action="connectivity-signleave1.php">
<tr>
<td>Id:</td><td><input type="text"name="uid" value="<?php
echo $id; ?>"> </td>

<td>UserId:</td><td><input type="text"name="uid" value="<?php
echo $uid; ?>"> </td>

<td>Username:</td><td><input type="text"name="username" value="<?php
echo $username; ?>"> </td>

<td>designation:</td><td><input type="text"name="desig" value="<?php
echo $desig; ?>"> </td>

<td>department:</td><td><input type="text"name="dept" value="<?php
echo $dept; ?>"> </td>
<td><a href="leaveform.php?gid=<?php echo $id;?>">click</td>
</tr>
<?php
}
?></table>
</form>

</fieldset>
</div>
</body>
</html>