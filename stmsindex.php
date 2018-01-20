<!DOCTYPE html>
<html lang="eng">
<head>
	<link rel="stylesheet" href="stmsstyles.css">
	<h3>Welcome to the Simple Time Management System</h3>
</head>

<p>Please enter your details below to create an account. If you already have an account click <a href=stmslogin.php>here</a>to Log in into your account</p>

		<form name="register" method="POST" action="?">
			<p>Forename  <input type="text" name="forename" maxlength="30" size="30"></p>
			<p>Surname   <input type="text" name="surname" maxlength="30" size="30"></p>
			<p>Email     <input type="text" name="email" maxlength="30" size="30"></p>
			<p>Password  <input type="Password" name="Password" maxlength="30" size="30"></p>
			<input type="submit" name="submit" value="submit">

		</form>
