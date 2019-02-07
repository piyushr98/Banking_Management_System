<?php include('serverreg.php');?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Self Signup Form</title>
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
<body>
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
							<li><a href="http://localhost/BankingMS/index.php">home</a></li>
						    <li><a href="http://localhost/BankingMS/contact.php">contact</a></li>
					
						</ul>
					</div>
				
				</div>
			</nav>
		</div>
		<div class="logo">
			
			<marquee><h1>CORPORATE BANK</h1></marquee>
		
		</div>
	<div class="banner-main jarallax">

								<br><br>
								<br><br>
			<div class="container">
				<div class="banner-inner">
					<div class="col-md-5 banner-left">
						<form action="reg1.php" method="post">
						<h3>Open savings account</h3>
							<input type="text" name="name"  placeholder="Full name" required=""/>
							<input type="email" name="email" placeholder="Your Email" required=""/>
							<input type="text" name="dob" placeholder="Date Of Birth (yyyy-mm-dd)" required=""/>
							<input type="tel" name="pno" placeholder="Phone number" required=""/>
							<input type="text" name="address" placeholder="Address" required=""/>
							<input type="text" name="gender" placeholder="Gender" required=""/>
							<input type="text" name="pin" placeholder="Desired Pin" required=""/>
							<div class="submit">
								<input type="submit" name="register" value="get started">
							</div>
						</form>
						<?php print("$output");?>
					</div>
				</div>
			</div>

								<br><br>
								<br><br>
								<br><br>
								<br><br>
		</div>


		
	

	</body>
	</html>