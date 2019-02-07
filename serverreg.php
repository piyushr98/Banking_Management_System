<?php
	$username="";
	$email="";
	$dob="";
	$address="";
	$phno="";
	$gender="";
	$pin="";
	$accno="";
	$token="";
	$output="";
	$errors= array();
	//connect to database
	$db=mysqli_connect('localhost','root','','banking');

	if(isset($_POST['register']))
	{
	$username=$_POST['name'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$pno=$_POST['pno'];
	$address=$_POST['address'];
    $gender=$_POST['gender'];
	$pin=$_POST['pin'];


	if(empty($username)){
		array_push($errors,"Username is required");
	}
	if(empty($email)){
		array_push($errors,"Email is required");
	}
	$line='THANK YOU! Your account number is : ';
	if(count($errors)==0)
	{	
		$sql= "INSERT INTO regform (name,email,dob,pno,address,gender,pin)
				VALUES('$username','$email','$dob','$pno','$address','$gender','$pin')";
		if(mysqli_query($db,$sql)){
		$token=mysqli_insert_id($db);
		$bal="INSERT INTO balance (accno,balance)
			VALUES('$token',0)";
		mysqli_query($db,$bal);
		$output='<span style="color: white; font-size: 30px;">'.$line.''.$token.'';
		}
	}
}

?>