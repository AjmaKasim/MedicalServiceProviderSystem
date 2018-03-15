
<!DOCTYPE html>
 <html class="no-js"> 
	<head>
	
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">
	
	
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

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
		   					<P>  <h31  id="visit"><b>Search by HOSPITAL</b></h31>
              
               
                <div class="head">
                        <form action="hospitalsearch.php" method="POST">
                                <input type="text" name="hospitalname" placeholder="Hospital Name">
                                <input class="submit"type="submit" value="Search" name="appoinment">
                            </form>
                </div></P>

                <p><h31  id="visit"><b>Search by DOCTOR</b></h31><br/>
               
               
                <div class="head">
                    <form action="doctorsearch.php" method="POST">
                        <input type="text" name="doctorname" placeholder="Doctor Name">
                        <input class="submit"type="submit" value="Search" name="appoinment">
                    </form>
                </div></p>

                <p><h31  id="visit"><b>Search by DEPARTMENT</b></h31><br/>
               
                
                <div class="head">
                    <form action="departmentsearch.php" method="POST">
                        <input type="text" name="department" placeholder="Department">
                        <input class="submit"type="submit" value="Search" name="appoinment">
                    </form>
                </div></p>

		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	
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

