<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PAP</title>
</head>

<body>

<?php




session_start();
$UserName=($_POST['txtUserName']);
$Password=($_POST['txtPassword']);



include('connection.php');
$sql = "select * from agent where username='".$UserName."' and password='".$Password."'";
$result = mysql_query($sql,$con)  or die(mysql_error());
$records = mysql_num_rows($result);
$row = mysql_fetch_array($result);

if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'log1.php\';</script>';

}

else
{

session_start();
$_SESSION['username']=$row['username'];
header("location:home2.php");



}mysql_close($con);
?>
</body>
</html>
