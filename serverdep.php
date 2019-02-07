<?php
	$accno="";
	$balance="";
	$output="";
	$errors= array();
	//connect to database
	$db=mysqli_connect('localhost','root','','banking');

	if(isset($_POST['dep']))
	{
	$accno=$_POST['accno'];
	$depos=$_POST['balance'];

	

		if(empty($accno))
		{
			array_push($errors,"Account not found");
		}
	
		$line='Deposit Successful';
	if(count($errors)==0)
	{	
		$sql = "SELECT * FROM  balance WHERE accno = '$accno'";
		$result = mysqli_query($db,$sql)
		or die("SQL select statement failed");

	  while ($row = mysqli_fetch_array($result))

		{
			$accno = $row["accno"];
			$depo= $row["balance"];
		}
		
		$bal = $depo+$depos;


   


        $sql1="UPDATE balance SET balance='$bal' WHERE accno='$accno'";
		if(mysqli_query($db,$sql1))
		$output='<span style="color: White; font-size: 30px;">'.$line.'';
	
   

 }
}
?>
