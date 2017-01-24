<html>
<body>
<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login for employees</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>

<label for='username' >UserName*:</label>
<input type="text"  name="txtUserName">
<br>
<br>
<label for='password' >Password*:</label>
<input type="password" name="txtPassword"  maxlength="50" /><br><br>

<input type="submit" name="Submit" value="Submit" />

</fieldset>
</form>
<a href="index.php" title="signup" target="blank"><font color="blue">click here to exit</font></a>
</body>
</html>