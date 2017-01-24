<?php

	$username= $_POST['username'];	
$uid = $_POST['uid'];
	$selectleave = $_POST['selectleave'];
	$sdate = $_POST['sdate'];
	$edate = $_POST['edate'];
	$desig =  $_POST['desig'];
                     $dept = $_POST['dept'];
	 $posted = $_POST['posted'];
	$durat= $_POST['durat'];
	
	 $mob = $_POST['mobile'];
	 $address = $_POST['address'];
	 $status = $_POST['status'];
               
echo $uid;
echo $address;

   include('connection.php');

	$sql = "insert into practice.employ (uid,uname,aleave,sdate,edate,desig,dept,posted,durat,mobile,address,status) values ('$uid','$username','$selectleave','$sdate','$edate','$desig','$dept','$posted','$durat','$mob','$address','$status')";
mysql_query ($sql,$con) or die(mysql_error());
	// Close The Connection
	mysql_close ($con);

	echo '<script type="text/javascript">alert("Leave Applied SUCCESSFULLY;");window.location=\'log.php\';</script>';
?>
