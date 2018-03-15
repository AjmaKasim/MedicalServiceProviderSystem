
<!DOCTYPE html>
 <html class="no-js"> 
	<head>

	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">
	
	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
	
	</head>
	<body>
	
	
	<div id="fh5co-page">
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="index.html">MEDICO</a></h1>
				<nav role="navigation">
					<ul>
						
                   <li><a href="home.php">HOME</li>
                   <li><a href="navhospital.php">HOSPITALS</a></li>
                   <li><a href="navdoctor.php">DOCTORS</a></li>
                   <li><a href="navdepartment.php">DEPARTMENTS</a></li>
                   <li><a href="profile.php">YOUR BOOKINGS</a></li>
                   <li><a href="about.html">ABOUT US</a></li>
                   <li><a href="logout.php">LOG OUT</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/slide_2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Our Expertise</h2>
		   					<p class="fh5co-lead">A True Devotion to Healing.<i class="icon-heart"></i> </p>
		   					<p>OUR VISION</p>
		   					<p>To improve health,elevate hope and advance healing-for all.To be the first and best coice for care. </p>

		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	
	<div id="fh5co-services-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>OUR MISSION</h2>
					<p>To build a bridge between doctors and patients so that patients can find ways to have good medical check-ups and guidance to keep their health in normal condition. 

 </p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box">
					<div class="services">
						<!--<i class="icon-laptop"></i>-->
						<div class="desc">
						
							<p>We will never knowingly undermine continuity of care</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<!--<i class="icon-server"></i>-->
						<div class="desc">
							
							<p>We will foster a company-wide ethos that prevention is better than cure</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<!--<i class="icon-money"></i>-->
						<div class="desc">
							
							<p>We will transparently reveal the results of any clinical initiative we undertake irrespective of whether they support or hinder our business goals</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<!--<i class="icon-tablet"></i>-->
						<div class="desc">
							
							<p>We will respect the privacy of patient details and maintain strict confidentiality of any patient information </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<!--<i class="icon-line-chart"></i>-->
						<div class="desc">
							
							<p>We will closely scrutinise every decision we make to ensure they reflect each of our values</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<!--<i class="icon-pie-chart"></i>-->
						<div class="desc">
						
							<p>We will never endorse non evidence-based health services on our platform</p>
						</div>
					</div>
				</div>
			</div>
			
			</div>
			
		</div>
	</footer>
	</div>
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

<?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: ../index.php"); // redirects if user is not logged in
   }
   ?>