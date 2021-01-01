<?php
session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title> Login Page </title>
<link rel="stylesheet"  href="css/stylesheet.css">
</head>
<body style="background-color: #2c3e50">

	<div id="main-wrapper">
	<center>
		<h2>Login Form</h2>
	<img src="image/login1.png" class="login">
</center>
<form class="myform"action="index.php"  method="post">
	
	<label><b>Username:</b></label><br>
	<input name="username" type="text" class="inputvalues"placeholder="Type your username"required/><br>
	<label><b>Password:</b></label><br>
	<input name="password" type="Password" class="inputvalues"placeholder="Type your Password"required/><br>
	<input name="login" type="Submit"id="login_btn"value="Login"/>
	<a href="register.php"><input type="Button"id="register_btn"value="Register"/></a>
</form>
<?php
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query="select *from user WHERE username='$username'AND password='$password'";
	
	$query_run=mysqli_query($con,$query);
if(mysqli_num_rows($query_run)>0)	
{
	
		//valid
		$_SESSION['username']=$username;
		header('location:home.php');
	}
	else
	{
		//invalid
			echo'<script type="text/javascript">alert("Invaid credentials")</script>';

	}
}



?>
</div>




</body>
</html>
