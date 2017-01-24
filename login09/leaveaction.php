
<?php


	$id= $_POST['id'];
	$username= $_POST['username'];	
	$uid = $_POST['uid'];
	$selectleave = $_POST['selectleave'];
	$sdate = $_POST['sdate'];
	$edate = $_POST['edate'];
	$desig =  $_POST['desig'];
                     $dept = $_POST['dept'];
	$posted = $_POST['posted'];
	$durat = $_POST['durat'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
             
$action = $_POST['action'];
$days=$_POST['days'];
$status = $_POST['status'];
$reason=$_POST['reason'];
echo $uid;
echo $address;

   include('connection.php');

	$sql = "insert into practice.admin (uid,username,aleave,sdate,edate,desig,dept,posted,durat,mobile,address,status,action,reason,days,id) values ('$uid','$username','$selectleave','$sdate','$edate','$desig','$dept','$posted','$durat','$mobile','$address','$status','$action','$reason','$days','$id')";
$rql="update practice.employ set durat='$days',status='$action' where uid='$uid'";

mysql_query ($sql,$con) or die(mysql_error());
mysql_query ($rql,$con) or die(mysql_error());
	// Close The Connection
	mysql_close ($con);

	echo '<script type="text/javascript">alert("submitted SUCCESSFULLY;");window.location=\'log.php\';</script>';
?>