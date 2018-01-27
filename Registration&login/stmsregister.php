<?php
session_start();
include "stmssql.php";
$forename=$_POST['forename'];
$surname=$_POST['surname'];
$email=$_POST['email'];
$password=$_POST['password'];
$role=$_POST['role'];
if($forename!=""&&$surname!=""&&$email!=""&&$password!=""){
	$forename=trim(strtolower($forename));
	$surname=trim(strtolower($surname));
	$email=trim(strtolower($email));
	$password=trim(strtolower($password));
	$link=mysqli_connect($db_host,$db_username,$db_password,$db_name);
		if($link=="") {echo "connection error";}
	$query="SELECT *FROM `members` WHERE `email`='".$email."'";
	$result=mysqli_query($link,$query);
	$row=mysqli_fetch_array($result);
	if($row['3']==$email){
		print"a user with that email already exists";
	}
	else{
		print" Welcome ".$role." user,you are being registerd<br />";		
		$query="INSERT INTO `members` (forename,surname,email,password) VALUES('".$forename."','".$surname."','".$email."','".$password."')";
		$result=mysqli_query($link,$query);
		if ($result==""){print"insert failed";}
		print"<html>
<head>
	<script type=\"text/javascript\">
		<!--
		function Redirect() {
window.location=\"stmslogin.php\";
}
document.write (\"You will be redirected to the login  page in 10 seconds!\")
setTimeout('Redirect()', 10000);
//-->
</script>
</head>
</html>";
	}

}
else{print"none of the fields can be empty..please click  <a href=stmsindex.php> HERE </a> to go back";}
?>
