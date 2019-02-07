<?php

	$accno1="";
	$accno2="";

	$depos="";
	$depo="";
	$depo1="";
	$output="";
	$errors= array();


	$db=mysqli_connect('localhost','root','','banking');

	if(isset($_POST['trf']))
	{

	$accno1=$_POST["accno1"];
	$accno2=$_POST["accno2"];
	$depos=$_POST["bal"];
	

	if(empty($accno1)||empty($accno2)){
		array_push($errors,"Account not found");
	}


	 $line='Transfer Successful';
	 $line1='Insufficient balance to transfer';
	 
	 if(count($errors)==0)
{	
	

	$sql = "SELECT * FROM  balance WHERE accno = '$accno1'";
	$result = mysqli_query($db,$sql)
		or die("SQL select statement failed");

	while ($row = mysqli_fetch_array($result))

		{
			$accno1 = $row["accno"];
			$depo= $row["balance"];
		}

	$sql2= "SELECT * FROM  balance WHERE accno = '$accno2'";
	$result2 = mysqli_query($db,$sql2) or die("SQL select statement failed");

	while ($row = mysqli_fetch_array($result2))
	{
	 	$depo1= $row["balance"];
	}

		$bal1 = $depo+$depos;
		$bal2 = $depo1-$depos;

	if($depos>$depo1 && $bal2<=0)
	{
		 $output='<span style="color: White; font-size: 30px;">'.$line1.'';
		 
	}
	 else{

	 	if($bal2>0)
	{


	
		$sql3 = "UPDATE balance SET balance = '$bal1' WHERE accno = '$accno1'";
		$result3 = mysqli_query($db,$sql3);

		$sql4 = "UPDATE balance SET balance = '$bal2' WHERE accno = '$accno2'";
		$result4 = mysqli_query($db,$sql4);

		$sql5 = "INSERT INTO transfer(benificiary_acct,debit_acct,amount,event)
				VALUES ('$accno1','$accno2','$depos', 'Transfer')";
	
        if(mysqli_query($db,$sql5)&&mysqli_query($db,$sql4)&&mysqli_query($db,$sql3))
			 $output='<span style="color: White; font-size: 30px;">'.$line.'';
	}
	
}


   }
}
        
		

?>
