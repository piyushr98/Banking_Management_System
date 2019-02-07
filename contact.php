<?php include('serverc.php');?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Contact us</title>
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
							
							<li><a href="http://localhost/BankingMS/alog.php">Admin login</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="logo">
			<a href="contact.php"><!--<i class="fa fa-inr" aria-hidden="true"></i>-->Contact <span>Us</span></a>
		</div>
<!-- contact -->
<section class="contact" id="contact">
	<div class="container">
		<div class="contact-grids">
			<div class=" col-md-6 contact-form">
				<form action="contact.php" method="post">
						<input type="text" name="subject" placeholder="Subject" required=""/>
						<input type="text" name="name" placeholder="Your name" required=""/>
						<input type="email" name="email" placeholder="Your mail" required=""/>
						<textarea name="message" placeholder="Message" required=""></textarea>
						<div class="submit1">
							<input type="submit" name='submit' value="submit">
						</div>
				</form>
				<div class="header_contact_details_agile"><i class="fa fa-envelope-o" aria-hidden="true"></i>
						<div class="w3l_header_contact_details_agile">
							 <div class="header-contact-detail-title">Send us a Message</div> 
							<a href="#">info@example.com</a>
						</div>
				   </div>
			   
					<div class="header_contact_details_agile"><i class="fa fa-phone" aria-hidden="true"></i>
						<div class="w3l_header_contact_details_agile">
							 <div class="header-contact-detail-title">Give us a Call</div> 
							<a class="w3l_header_contact_details_agile-info_inner"> 919-993-1000 </a>
						</div>
				   </div>
			   
			</div>
		</div>
	</div>
		
					
	
</section>
<!-- //contact -->

</body>
</html>