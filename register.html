<?php
require 'dbconfig/config.php';


?>
<!DOCTYPE html>
<html>
<head>
<title> Registration  Page </title>
<link rel="stylesheet"  href="css/stylesheet.css">
</head>
<body style="background-color: #34495e">

	<div id="main-wrapper">
	<center>
		<h2>Registration  Form</h2>
	<img src="image/login1.png" class="login">
</center>


<form class="myform"action="Register.php"  method="post">
	
	<label><b>Username:</b></label><br>
	<input  name="username" type="text" class="inputvalues"  placeholder="Type your username" required/><br>
	<label><b>Password:</b></label><br>
	<input name="password" type="Password" class="inputvalues" placeholder="Type your Password" required/><br>
	<label><b> Confirm Password:</b></label><br>
	<input name="cpassword" type="Password" class="inputvalues" placeholder="Confirm Password" required/><br>
	<input name="Submit_btn" type="Submit"id="signup_btn"value="Signup"/><br>
	<a href="index.php"><input type="Button"id="back_btn"value="Back"/>
</form>
<?php
 if(isset($_POST['Submit_btn']))
 {
 	//echo '<script type="text/javascript"> alert("Signup_Btn clicked")  </script>';
	
	$username=$_POST['username'];
	$password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
	
	if($password=$cpassword)
	{
		$query="select  * from user WHERE username='$username'";
		$query_run=mysqli_query($con,$query);
		
		if(mysqli_num_rows($query_run)>0)
		{
			//there is already user with the same username
			echo'<script type="text/javascript">alert("User already exists..try another username")</script>';
		}
		else
		{
					$query="insert into user values('$username','$password')";
					$query_run=mysqli_query($con,$query);
					
					if($query_run)
					{
						echo'<script type="text/javascript">alert("User Registered.. Go to the login page to login")</script>';
					}
else
{
	echo'<script type="text/javascript">alert("Error!")</script>';
}
}

 }
 else{
 echo'<script type="text/javascript">alert("Passworf and confirm password does not match!")</script>';
 }
 }
 
?>
</div>




</body>
</html>
