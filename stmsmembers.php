<?php
include "stmssql.php";
$email=strtolower(trim($_POST['email']));
$password=strtolower(trim($_POST['password']));
$link=mysqli_connect($db_host,$db_username,$db_password,$db_name);
if($link==""){
	print"connection error";
}
$query="SELECT*FROM `members` WHERE email='".$email."' AND password='".$password."'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
if($row['email']==$email&&$row['password']==$password){
	print"welcome ".$row['forename']." you are logged in as a super user";}
	else{
		echo"email or password did not match";
	}



?>