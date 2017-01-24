<!DOCTYPE HTML>
<html>
<head>
<title>Sign-Up</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="body-color">
<div id="Sign-Up">
<fieldset style="width:30%"><legend>Registration Form</legend>
<table border="0">
<tr>
<form method="POST" action="connectivity-sign-up.php">
<td>Name</td><td> <input type="text" name="name" required></td>
</tr>
<tr>
<td>Email</td><td> <input type="text" name="email" required></td>
</tr>
<tr>
<td>UserName</td><td> <input type="text" name="user" required></td>
</tr>
<tr>
<td>Password</td><td> <input type="password" name="pass" required></td>
</tr>
<tr>
<td>Confirm Password </td><td><input type="password" name="cpass" required></td>
</tr>
<tr>
<td><input id="button" type="submit" name="submit" value="Sign-Up"></td>
</tr>
</form>
</table>
</fieldset>
</div>
<a href="index.php" title="signup" target="blank"><font color="blue">click here to exit</font></a>
</body>
</html>