<?php include('servercu.php');?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Customer Panel</title>
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
<!-- //fonts -->
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //scrolling script -->
<style>
input[type=text1], select {
    width: 100%;
    padding: 6px 10px;
    margin: 4px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing: border-box;
}

</style>
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
							
							<li><a href="http://localhost/BankingMS/index.php">Home</a></li>
							<li><a href="http://localhost/BankingMS/contact.php">contact</a></li>
							<li><a href="http://localhost/BankingMS/index2.php">LOGOUT</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="logo">
			<a href="custindex.php"><!--<i class="fa fa-inr" aria-hidden="true"></i>-->Corporate <span>bank</span></a>
		</div>
		<!-- //Top-Bar -->
		<div class="banner-main jarallax">
			<div class="container">
				<div class="banner-inner">
					<div class="col-md-5 banner-left">
						<form action="custindex.php" method="post">
						<h3>Change Pin</h3>
							<input type="text" name="accno" placeholder="Verify Your Account No" required=""/>
							<input type="text" name="pin" placeholder="Enter Old Pin" required=""/>
							<input type="text" name="pin1" placeholder="Enter New Pin" required=""/>
							<input type="text" name="pin2" placeholder="Retype Pin" required=""/>
							<div class="submit">
								<input type="submit" name="pinpost" value="Change PIN">
							</div>	
						</form>
						<?php print("$output");?>
					</div>
					<div class="col-md-7  banner-right">
						<h1>Welcome User</h1>
						<center><h4>Your Account balance is   
							<?php print("$dispbal");?> </h4>
							<div class="col-md-10 banner-right">
							<form action="custindex.php" method="post">
								<input type="text1" name="accno" placeholder="Verify Your Account No" required=""/>
								<div class="submit1">
								<input type="submit" name="show" value="Show">
								<br>
								</div>
							</form>
							</div>
						<h1></h1></center>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
</body>
</html>