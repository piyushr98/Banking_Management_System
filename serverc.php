<?php
	$name="";
	$email="";
	$subject="";
	$message="";
	$errors= array();
	//connect to database
	$db=mysqli_connect('localhost','root','','banking');

	if(isset($_POST['submit']))
	{
	$subject=$_POST['subject'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	if(empty($subject)){
		array_push($errors,"field is required");
	}
		if(empty($name)){
		array_push($errors,"field is required");
	}
	if(empty($email)){
		array_push($errors,"field is required");
	}
	if(empty($message)){
		array_push($errors,"field is required");
	}
	if(count($errors)==0)
	{	
			
		$sql= "INSERT INTO contact (subject,name,email,message)
				VALUES('$subject','$name','$email','$message')";
				mysqli_query($db,$sql);
				header('location:contact.php');
	}

}


?>