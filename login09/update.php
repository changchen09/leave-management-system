
<?php
$username=$_POST['username'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
$newpassword1 = $_POST['newpassword1'];
include('connection.php');
$sql = "select * from agent where username='$username' AND password='$password'";

$result = mysql_query($sql,$con) or die(mysql_error());
       
if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			
if($newpassword==$newpassword1)
{
$newpassword=$newpassword;
		  $msql="UPDATE agent SET password='$newpassword' where username='$username'";
mysql_query ($msql,$con);
// Close The Connection
	mysql_close ($con);
echo '<script type="text/javascript">alert("Congratulations You have successfully changed your password");window.location=\'log1.php\';</script>';
//header("location:homm.php");
}
else
{
echo '<script type="text/javascript">alert("The new password and confirmed password must be same");window.location=\'pwdreset.php\';</script>';
//header("location:pwdreset.php");

}


			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'user name and password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
echo '<script type="text/javascript">alert("username and password doesnot match");window.location=\'pwdreset.php\';</script>';
//header("location:pwdreset.php");

				
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>


      
       
    