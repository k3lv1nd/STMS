<?php
session_start();
print"welcome fucker, time to login<br />";


?>
<!DOCTYPE html>
<html>
<head>
	<title>login user</title>
	<form name="login" method=post action="stmsmembers.php">
	Input email<input type="text" name="email" maxlength="30"><br />
	Enter password<input type="text" name="password"><br />
	<input type="submit" name="submit" value="submit">
</form>


	
</head>
<body>

</body>
</html>
<?php
include "stmssql.php";
$email=$_POST['email'];
$password=$_POST['password'];
?>