<?php
	session_start();
	$username="";
	$email="";
	$errors= array();
	//connect to database
	$db=mysqli_connect('localhost','root','','banking');
	
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];

	if(empty($username)){
		array_push($errors,"Username is required");
	}
	if(empty($password)){
		array_push($errors,"Password is required");
	}
	if(count($errors)==0){
		$query="SELECT * FROM alogin WHERE userid='$username' AND password='$password'";
		$result = mysqli_query($db,$query);
		if (mysqli_num_rows($result)==1){
			//log user in
			$_SESSION['user']=$username;
				$_SESSION['success']="You are now logged in";
				header('location: reg.php');
		}
		else{
			array_push($error,"Wrong username or password");
		}

	}
	}

?>