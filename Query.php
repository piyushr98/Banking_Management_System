

<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Customers List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Corporate Bank a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- .css files -->
	<link href="css/bars.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/font-awesome.css" />
<!-- //.css files -->
<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- //Default-JavaScript-File -->
<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Ropa+Sans:400,400i&amp;subset=latin-ext" rel="stylesheet">
</head>
<!-- //Head -->
<!-- Body -->
 <body style="background-image: url(images/123.jpg); background-size: cover; background-position: center;">
	<!-- Top-Bar -->
		<div class="top-bar">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="http://localhost/BankingMS/index.php" class="scroll">home</a></li>
							<li><a href="http://localhost/BankingMS/index2.php">LOGOUT</a></li>
						
						</ul>
					</div>
				</div>
			</nav>
		<marquee><h2>CORPORATE BANK</h2></marquee>
	
				

								<br><br>
								<br><br>
			
				
								<h1><center>Generated Queries</center></h1>
							
							
								<table border="4" align="center">
						<tr>
							<th color="white"><h4>Subject</h4></th>
							<th color="white"><h4>Name</h4></th>
							<th color="white"><h4>Email</h4></th>
							<th color="white"><h4>Message</h4></th>
							<th color="white"><h4>Query Date</h4></th>
							
						</tr>
						<tr>

<?php

$conn = mysqli_connect("localhost", "root", "", "banking");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT * from contact";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
   	
    echo "<tr><td>" . $row["subject"] . "</td><td>"
. $row["name"]. "</td><td>" . $row["email"] . "</td><td>"
. $row["message"]. "</td><td>" . $row["date"] . "</td></tr>";

}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

						</tr>
					
		

		               
					
			
					

					

				
			

								<br><br>
								<br><br>
								<br><br>
								<br><br>
						

	</body>
	</html>