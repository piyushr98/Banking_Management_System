<?php include('servercu.php');?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Home</title>
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
							<li><a href="http://localhost/BankingMS/index.php">home</a></li>
							<li><a href="#services" class="scroll">services</a></li>
							<li><a href="http://localhost/BankingMS/about.php">about</a></li>
							<li><a href="http://localhost/BankingMS/contact.php">contact</a></li>
						
							<li><a href="http://localhost/BankingMS/alog.php">Admin login</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="logo">
			<a href="index.php"><!--<i class="fa fa-inr" aria-hidden="true"></i>-->Corporate <span>bank</span></a>
			
		</div>
		<!-- //Top-Bar -->
		<div class="banner-main jarallax">
			<div class="container">
				<div class="banner-inner">
					
					<div class="col-md-5 banner-left">
						<form action="index.php" method="post">
						<h3>Customer Login</h3>
							<input type="text" name="accno" placeholder="Account No" required=""/>
							<input type="text" name="pin" placeholder="PIN" required=""/>
							<div class="submit">
								<input type="submit" name="open" value="get started">
							</div>
						</form>

					</div>
					<div class="logo">
		
			<a href="reg1.php"><!--<i class="fa fa-inr" aria-hidden="true"></i>-->__Start Savings<span> Account__</span></a>
		</div>

					<div class="col-md-7  banner-right">

						<h1>Corporate Vision</h1>
						<center><h4>"Emerge as a Model for Inclusive Growth and Innovative Banking Services"</h4></center>
						<h1>Corporate Mission</h1>
							<div class="banner-right-text">
								<div class="main-icon">
									<i class="fa fa-share" aria-hidden="true"></i>
								</div>
								<p>To expand our reach to meet the financial needs of people</p>
							<div class="clearfix"></div>
							</div>
							<div class="banner-right-text">
								<div class="main-icon">
									<i class="fa fa-share" aria-hidden="true"></i>
								</div>
								<p>To provide full range of banking services with innovative products</p>
							<div class="clearfix"></div>
							</div>
							<div class="banner-right-text">
								<div class="main-icon">
									<i class="fa fa-share" aria-hidden="true"></i>
								</div>
								<p>To continue to adopt modern technology for superior banking experience</p>
							<div class="clearfix"></div>
							</div>
							<div class="banner-right-text">
								<div class="main-icon">
									<i class="fa fa-share" aria-hidden="true"></i>
								</div>
								<p>To create a rewarding environment for  all stakeholders</p>
							<div class="clearfix"></div>
							</div>
							<div class="banner-right-text">
								<div class="main-icon">
									<i class="fa fa-share" aria-hidden="true"></i>
								</div>
								<p>To continue as a model organisation for transparent and ethical practices</p>	
							<div class="clearfix"></div>
							</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

<!-- services -->
<section class="services" id="services">
	<div class="container">
		<div class="services-heading">
			<h3>services</h3>
		</div>
		<div class="service-grids">
			<div class="service-grid-top">
				<div class="col-md-4 service-grid-1">
					<div class="service-grid-text">
						<div class="icon">
							<i class="fa fa-inr" aria-hidden="true"></i>
						</div>
						<h4></h4>
						<p></p>
					</div>
				</div>
				<div class="col-md-4 service-grid-1">
					<div class="service-grid-text">
						<div class="icon">
							<i class="fa fa-money" aria-hidden="true"></i>
						</div>
						<h4></h4>
						<p></p>
					</div>
				</div>
				<div class="col-md-4 service-grid-1">
					<div class="service-grid-text">
						<div class="icon">
							<i class="fa fa-university" aria-hidden="true"></i>
						</div>
						<h4></h4>
						<p></p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="service-grid-bottom">
				<div class="col-md-4 service-grid-1">
					<div class="service-grid-text">
						<div class="icon">
							<i class="fa fa-handshake-o" aria-hidden="true"></i></div>
						<h4></h4>
						<p></p>
					</div>
				</div>
				<div class="col-md-4 service-grid-1">
					<div class="service-grid-text">
						<div class="icon">
							<i class="fa fa-briefcase" aria-hidden="true"></i>
						</div>
						<h4></h4>
						<p></p>
					</div>
				</div>
				<div class="col-md-4 service-grid-1">
					<div class="service-grid-text">
						<div class="icon">
							<i class="fa fa-credit-card" aria-hidden="true"></i>
						</div>
						<h4></h4>
						<p> </p>
					</div>
				</div>
				<div class="clearfix"></div>

			</div>
		</div>
	</div>
</section>
<!-- //services -->



<!-- footer -->
<section class="footer">
	<div class="container">
		<div class="footer-grids">
			<div class="col-md-3 footer-grid1">
		
				<div class="logo1">
					<a href="index.html">Corporate <span>Bank</span></a>
				</div>
			</div>

			
	</div>
	
	<section class="footer"
	<div class="container">
		<p class="p1">LOCATIONS</p>
	             <div class="col-md-4 footer-grid1">
				<p class="p1">Branch:BANGALORE-CITY</p>
				<P>1st, T.V.COMPLEX 118,KILARI ROAD</P>
			    <p>BANGALORE-560053</P>
				<P>Contact: 080-22206467</p>
				</div>

				<div class="col-md-4 footer-grid2">
				<p class="p1">Branch:BANGALORE-CANTONMENT</p>
				<P>14/15,K.KAMARAJ ROAD,P.B.NO.4242,CANTONMENT</P>
			    <p>BANGALORE-560042</P>
	            <P>Contact: 080-25550523</p>
	            </div>
	            
	            <div class="col-md-4 footer-grid3">
				<P class="p1">Branch:BANGALORE-MALLESWARAM</P> 
				<p>SOUTH-END ROAD,MALLESWARAM</p>
			    <p>BANGALORE-560020</p>
				<p>Contact: 080-23312523</p>
	            </div>  
    </div>

	</section>

			
		

			
			
				
		
	

<!-- //footer -->

<!-- copyright -->
<section class="copyright">
	<div class="agileits_copyright text-center">
			<p>© 2018 Corporate Bank. All rights reserved</p>
			<h4>Designed by Piyush</h4>
	</div>
</section>
<!-- //copyright -->

	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<script src="js/bars.js"></script>
</body>
<!-- //Body -->
</html>
<!-- //html -->