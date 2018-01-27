<!DOCTYPE html>
<html lang="eng">
<head>
	<link rel="stylesheet" href="stmsstyles.css">
	<h3>Welcome to the Simple Time Management System</h3>
</head>
<script type="text/javascript">
	<!--
	function validate(){
		if(document.register.forename.value==""){
			alert("please enter your name");
			document.register.forename.focus();
			return false;
		}
		if(document.register.surname.value==""){
			alert("please enter your surname");
			document.register.surname.focus();
			return false;
		}
		if(document.register.email.value==""){
			alert("please enter your email");
			document.register.email.focus();
			return false;
		}
		if(document.register.password.value==""){
			alert("please enter your password");
			document.register.password.focus();
			return false;
		}
	}
</script>

<p>Please enter your details below to create an account. If you alredy have an account click<a href=stmslogin.php>here</a>to Log in into your account</p>

		<form name="register" method="post" action="stmsregister.php" onsubmit="return(validate());">
			<p>Forename  <input type="text" name="forename" maxlength="30" size="30" placeholder="enter forename"></p>
			<p>Surname   <input type="text" name="surname" maxlength="30" size="30" placeholder="enter surname"></p>
			<p>Email     <input type="email" name="email" maxlength="30" size="30" placeholder="enter email"></p>
			<p>Select role<select name="role" maxlength="30">
				<option value="regular">regular</option>
				<option value="super">manager</option>
				<option value="admin">admin</option>
			</select>
			<p>Password  <input type="text" name="password" maxlength="30" size="30" placeholder="enter password"></p>
			<input type="submit" name="submit" value="submit">

		</form>

