<?php

include('connection.php');


	$fullname = $_POST['name'];
	$userName = $_POST['user'];
	$email = $_POST['email'];
	$password =  $_POST['pass'];
                 $cpassword = $_POST['cpass'];
				 echo $userName.$email;
				 
				if ($password!= $cpassword )
 {
     
echo '<script type="text/javascript">alert("Oops! Password did not match! Try again. ");

window.location=\'sign.php\';</script>';
?>
<?PHP

 }
$pql = "select * FROM websiteusers where userName='$userName'"; 
$result1 = mysql_query($pql,$con) or die(mysql_error());
$records = mysql_num_rows($result1);	
if($records>0)
{
echo '<script type="text/javascript">alert("This username is already registered.please choose another username ");

window.location=\'sign.php\';</script>';
}

else
{
	$query = "INSERT INTO websiteusers (fullname,userName,email,pass,cpass) VALUES ('$fullname','$userName','$email','$password','$cpassword')";
	$data = mysql_query ($query)or die(mysql_error());

	echo '<script type="text/javascript"> alert("YOUR REGISTRATION IS COMPLETED."); window.location=\'log.php\';</script>';

	}




?>