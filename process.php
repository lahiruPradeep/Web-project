<?php
	//get values pass from  form in login.php file


	$username = $_POST['username'];
	$password = $_POST['password'];



	

	//connect to the server and select database

	$name=mysqli_connect("localhost","root","","login1");
	

	//query the database for user

	$result = mysqli_query($name,"select* from users where name = '$username' and password ='$password'");
	

	$row = mysqli_fetch_array($result);
	if($row){
		header('Location: http://localhost/newproject2/');

	}
	else
	{
		echo "<script> alert ('failed to login')</script>";
	}
	





?>