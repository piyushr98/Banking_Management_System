<?php

	$accno="";
	$pin="";
	$pin1="";
	$pin2="";
	$output="";
	$showbal="";
	$dispbal="";
	$errors= array();
	//connect to database
	$db=mysqli_connect('localhost','root','','banking');
	if(isset($_POST['open'])){
		$caccno=$_POST['accno'];
		$accno=$_POST['accno'];
		$pin=$_POST['pin'];
	if(empty($accno)){
		array_push($errors,"Username is required");
	}
	if(empty($pin)){
		array_push($errors,"Pin is required");
	}
	if(count($errors)==0){
		$query="SELECT * FROM clogin WHERE accno='$accno' AND pin='$pin'";
		$result = mysqli_query($db,$query);
		if (mysqli_num_rows($result)==1){
			//log user in
			$_SESSION['user']=$accno;
				$_SESSION['success']="You are now logged in";
				header('location:custindex.php');
		}
		else{
			array_push($error,"Wrong accno or pin");
		}
	}
	}
	if(isset($_POST['show'])){
		$accno=$_POST['accno'];
		$query1="SELECT * FROM balance WHERE accno='$accno'";
		$run=mysqli_query($db,$query1);
		$count = mysqli_num_rows($run);
		if($count==0)
			$dispbal ='<span style="color: white; font-size: 30px;">'.'Zero';
		else
		{
		while( $row = mysqli_fetch_array($run))
		{
			$showbal=$row['balance'];
		}
		$dispbal='<span style="color: white; font-size: 30px;">'.$showbal.'';
		}
	}

	if(isset($_POST['pinpost'])){
		$accno=$_POST['accno'];
		$pin=$_POST['pin'];
		$pin1=$_POST['pin1'];
		$pin2=$_POST['pin2'];

	if($pin1==$pin2)
	{
		$sql="SELECT * FROM regform WHERE pin LIKE '%$pin%' AND accno LIKE '%$accno%'";
		$result = mysqli_query($db,$sql);
		if (mysqli_num_rows($result)==1){
			$sql1= "UPDATE regform SET pin='$pin1' WHERE accno='$accno'";
				mysqli_query($db,$sql1);
				$line2='Your pin successfully changed';
				$output .='<span style="color: white; font-size: 30px;">'.$line2.'';
		}
		else{
			$output='<span style="color: white; font-size: 30px;">'.'Incorrect Old Pin'.'';
		}

	}
	else
		{
			array_push($error,"Password not matched");
		}

	}
?>