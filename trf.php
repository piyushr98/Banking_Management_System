<?php include('servertrf.php');?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Transfer Balance</title>
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
							<li><a href="http://localhost/BankingMS/index.php" class="scroll">home</a></li>
							<li><a href="http://localhost/BankingMS/index2.php">LOGOUT</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="logo">
			<ul class="nav navbar-nav navbar-right">
			<li><a href="reg.php">Customer<span>Registration</span></a></li>
			<li><a href="dep.php">Account<span>Deposit</span></a></li>
			<li><a href="wdl.php">Account<span>Withdrawal</span></a></li>
			<li><a href="trf.php">Transfer<span>Balance</span></a></li>
			<li><a href="clist.php">Customers<span>List</span></a></li>
			<li><a href="Query.php">Generated<span>Queries</span></a></li>
			<marquee><h1>CORPORATE BANK</h1></marquee>
		</ul>
		</div>
	<div class="banner-main jarallax">

								<br><br>
								<br><br>
			<div class="container">
				<div class="banner-inner">
					<div class="col-md-5 banner-left">
						<form action="trf.php" method="post">
						<h3>Intra Account Transfer</h3>


							<input type="text" name="accno1"  placeholder="Beneficiary Accno" required=""/>
						    <input type="text" name="accno2"  placeholder="Debit Accno" required=""/>
							
							<input type="text" name="bal" placeholder="Amount" required=""/>
							<div class="submit">
								<input type="submit" name="trf" value="TRANSFER">
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