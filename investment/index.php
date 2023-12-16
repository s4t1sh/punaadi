<?php
include 'db.php';

$get_details_query = "SELECT * FROM updates";
$result = mysqli_query($con,$get_details_query);
$get_details = mysqli_fetch_array($result);

mysqli_close($con);

?>

<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PUNAADI :: Investment Advisory</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/et-line-icons.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/lity.min.css"/>
    <link rel="stylesheet" href="css/lightbox.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="css/swiper.min.css"/>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7cPoppins:100,200,300,400,500,600,700,800,900%7cRoboto:100,300,400,500,700,900" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/style-elegant-modal.css">

	<style>
		.updates{
			position: absolute;
			bottom: 2%;
			right: 0.7%;
			background: rgba(0, 0, 0, 0.5);
			padding: 15px 15px;
			width: 500px;
			border-radius: 5px;
			box-shadow: 0 3px 0px 0px rgb(255, 255, 255,0.8);
		}

		.updates p{
			font-size: 18px !important;
			line-height: 36px;
			word-spacing: 4px;
		}

		@media (max-width: 767px) {
			.updates{
				width: 96%;
				right:0;
				left: 2%;
				margin-top: 10px;
			}
		}
	</style>
  </head>
  <body>
	  <!-- ==================================================
							load-wrapp
      ================================================== -->
	  <div class="load-wrapp">
		  <div class="wrap">
			  <ul class="dots-box">
			    <li class="dot"><span></span></li>
			    <li class="dot"><span></span></li>
			    <li class="dot"><span></span></li>
			    <li class="dot"><span></span></li>
			    <li class="dot"><span></span></li>
			  </ul>
		  </div>
      </div> 
	  <!-- ==================================================
							End load-wrapp
      ================================================== -->
	  
	  <!-- ==================================================
							navbar
      ================================================== -->
	  <nav class="navbar navbar-expand-md">
		  <div class="container">
			  <a class="navbar-brand" href="../index.html">
				  <img src="images/logo.png" class="w-logo" alt="img"> 
				  <img src="images/logo.png" class="b-logo" alt="img"> 
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="fa fa-bars"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="main-navbar">
				  <ul class="navbar-nav ml-auto">  
				      <li class="nav-item">
					  	<a class="nav-link" href="#" data-scroll-nav="1">Home</a>
				  	  </li>
					  <li class="nav-item">
					  	<a class="nav-link" href="#" data-scroll-nav="2">About</a>
					  </li>
					  <li class="nav-item">
					  	<a class="nav-link" href="#" data-scroll-nav="3">Services</a>
					  </li>
					  
					  <li class="nav-item">
						<a class="nav-link" href="#" data-scroll-nav="6" aria-haspopup="true"><button class="btn-modal" >Contact</button></a>
					  </li>
				  </ul>
			  </div>
		  </div>
	  </nav>
	  <!-- ==================================================
							End navbar
      ================================================== -->
	  
	  <!-- ==================================================
							Carousel
      ================================================== -->
	  <div id="carouselExampleFade" class="carousel slide carousel-fade position-relative" data-ride="carousel" data-scroll-index="1">
		  <div class="carousel-inner">
			  <div class="carousel-item active">
				  <img class="" src="images/felix.jpg" alt="image">
				  <div class="carousel-caption overlay-bg-65 flex-center">
					  <div>
						  <h4 class="color-eee fw-300 mb-20px fadeInUp animated">Investment options guidance</h4>
						  <h1 class="mb-20px color-fff fw-700 font-Poppins fadeInUp animated">Welcome to Punaadi<span class="color-l-blue fw-700"></span> </h1>
						  <p class="color-ddd fadeInUp animated">One Stop Solution for All Your Financial Needs</p>
						  
					  </div>
				  </div>
		      </div>
			  <div class="carousel-item">
				  <img class="" src="images/pexels-photo-373883.jpg" alt="image">
				  <div class="carousel-caption overlay-bg-65 flex-center">
					  <div>
						  <h4 class="color-eee fw-300 mb-20px fadeInUp animated">Investment advisory</h4>
						  <h1 class="mb-20px color-fff fw-700 font-Poppins fadeInUp animated">Welcome to <span class="color-l-blue fw-700">Punaadi</span> </h1>
						  <p class="color-ddd fadeInUp animated">We Are Into The Business of Trust</p>
						  
					  </div>
				  </div>
		      </div>
  		  </div>
		  <a class="carousel-control-prev transition-5 radius-50 background-l-blue ml-10px" href="#carouselExampleFade" role="button" data-slide="prev">
			  <i class="fa fa-angle-left fs-30"></i>
		  </a>
		  <a class="carousel-control-next transition-5 radius-50 background-l-blue mr-10px" href="#carouselExampleFade" role="button" data-slide="next">
			  <i class="fa fa-angle-right fs-30"></i>
		  </a>
		<?php
		if($get_details['details'] != ''){
			echo "<div class='updates' style='color: white;'>
			  ".$get_details['details']."
			</div>";
		}
		  ?>
	  </div>
	  <!-- ==================================================
							End Carousel
      ================================================== -->
	  
	  
	  
	  
	  <!-- ==================================================
							about-area
      ================================================== -->
	  <section class="about-area sec-padding" data-scroll-index="2">
		  <div class="container">
		  	  <h1 class="title-h">Investment <span> Advisory</span></h1>
			  <p class="title-p"></p>
			  <div class="row">
				  <div class="col-md-6">
					  <div class="about-image mb-30px wow fadeInLeft" data-wow-delay="0.4s">
						  <img src="images/about.jpg" alt="about">
					  </div>
				  </div>
				  <div class="col-md-6">
					  <div class="about-text wow fadeInRight" data-wow-delay="0.7s">
						  <h3>Choose the right investment option</h3>
						  <p class="mb-15px">Currently, we do investments in Equity & Commodiy markets. The focus remains on  Intraday  and the  positional trading. We do not use any software or automated tools, instead derive our trading success on knowledge and experience gained over long period of trading  with matured detachment of emotions on trading decisions. We are fairely successful in giving returns in line with nifty returns to our partners</p>
						  <div class="row">
							  <div class="col-sm-6">
								  <p class="mb-10px"><i class="fa fa-check color-l-blue mr-5px"></i> Investment advisory</p>
								  <p class="mb-10px"><i class="fa fa-check color-l-blue mr-5px"></i> Investment options guidance</p>
								  <p class="mb-10px"><i class="fa fa-check color-l-blue mr-5px"></i> support services</p>
							  </div>
							  
						  </div>
						  
					  </div>
				  </div>
			  </div>
		  </div>
	  </section>
	  <!-- ==================================================
							End about-area
      ================================================== -->
	  
	  <!-- ==================================================
							video-area-2
      ================================================== -->
	  <section class="video-area-2">
		  <div class="overlay-bg-75 sec-padding">
			  <div class="container">
				  <div class="row">
					  <div class="col-md-6">
						  <h3 class="color-fff">Why Us?</h3>
			  			  <p class="color-ccc mb-20px">We work to understand your complete financial picture.  We identify your goals and create a custom portfolio or match you with a strategic asset allocation portfolio with opportunistic rebalancing. </p>
						  <p class="color-ccc mb-20px">It takes a lifetime to accumulate wealth, but wealth can be destroyed overnight without proper planning. </p>
						  
					  </div>
				  </div>
			  </div>
		  </div>
	  </section>
	  <!-- ==================================================
							End video-area-2
      ================================================== -->
	  
	  
	  
	  <!-- ==================================================
							services-area-3
      ================================================== -->
	  <section class="services-area-3 sec-padding text-center" data-scroll-index="3">
		  <div class="container">
			  <h1 class="title-h">Our <span>Services</span></h1>
			  <div class="row">
				  <div class="col-md-4">
					  <div class="mb-25px mt-25px wow fadeInUp" data-wow-delay="0.3s">
						  <i class="fs-35 mb-20px color-l-blue"><img src="images/ico.png" class="ico"></i>
						  <h4>Investent Advisory </h4>
						  <p>Fund allocation and Returns analysis and advisory </p>
					  </div>
				  </div>
				  <div class="col-md-4 border-left">
					  <div class="mb-25px mt-25px wow fadeInUp" data-wow-delay="0.5s">
						  <i class="fs-35 mb-20px color-l-blue"><img src="images/ico.png" class="ico"></i>
						  <h4>Investent Options Guidance</h4>
						  <p>Basic guidance on factors  to look for when investing/fund allocation</p>
					  </div>
				  </div>
				  <div class="col-md-4 border-left">
					  <div class="mb-25px mt-25px wow fadeInUp" data-wow-delay="0.7s">
						  <i class="fs-35 mb-20px color-l-blue"><img src="images/ico.png" class="ico"></i>
						  <h4>Investment Support Services</h4>
						  <p>Financial management services</p>
					  </div>
				  </div>
				  <div class="border-bottom "></div>
				  
			  </div>
		  </div>
	  </section>
	 
	  
	  <!-- ==================================================
							contact-area
      ================================================== -->
      <section class="contact-area testimonials " data-scroll-index="6">
		<div class="overlay-bg-90 sec-padding">
          <div class="container">
			  <h1 class="title-h" style="color:#fff;">Contact Us</h1>
			  <p></p>
			  <div class="row">
				  <div class="col-md-7">
					  <p class="mb-20px">Feel Free to contact us </p>
					  <div class="address">		
						  <p class="mb-20px"><i class="background-f6f6f6 color-l-blue radius-50 fs-25 mr-10px text-center fa fa-user"></i>Raghu Bandi</p>
					  </div>
					  
					  <div class="address">		
						  <p class="mb-20px"><i class="background-f6f6f6 color-l-blue radius-50 fs-25 mr-10px text-center icon-map"></i>4th Floor,  # C-36, 1st Cross ,Sriramanagari, H.A.L Post, Bangalore-560017</p>
					  </div>
					  <div class="address">					
						  <p class="mb-20px"><i class="background-f6f6f6 color-l-blue radius-50 fs-25 mr-10px text-center icon-phone"></i>+91 8147907079</p>
					  </div>
					  <div class="address">		
						  <p class="mb-20px"><i class="background-f6f6f6 color-l-blue radius-50 fs-25 mr-10px text-center fa fa-clock-o"></i>
						  10 AM  to 7 PM</p>
					  </div>
					  <div class="address">	
						  <p class="mb-50px"><i class="background-f6f6f6 color-l-blue radius-50 fs-25 mr-10px text-center icon-envelope"></i>rbandi@punaadi.com</p>
					  </div>
				  </div>
				  <div class="col-md-5">
					  <div class="contact-form">
						  <form class="form" id="contact-form" method="post" action="#">
							  <div class="messages"></div>
							  <div class="controls">
								  <div class="row"> 
								  <div class="col-md-6">
									  <div class="form-group">
										  <input id="form_name" class="form-control" type="text" name="name" placeholder="Name"  required="required" data-error="Name is required.">
										  <div class="help-block with-errors color-l-blue"></div>
									  </div>
								  </div>
								  <div class="col-md-6">
									  <div class="form-group">
										  <input id="form_email" class="form-control" type="email" name="email" placeholder="Email" required="required" data-error="email is required.">
									  <div class="help-block with-errors color-l-blue"></div>
									  </div>
								  </div>
								  <div class="col-md-12">
									  <div class="form-group">
										  <input id="form_subject" class="form-control" type="text" name="subject" placeholder="Subject">
										  <div class="help-block with-errors"></div>
									  </div>
								  </div>
								  <div class="col-md-12">
									  <div class="form-group">
										  <textarea id="form_message" class="form-control" name="message" placeholder="Message" rows="6" required="required" data-error="Message."></textarea>
										  <div class="help-block with-errors color-l-blue"></div>
									  </div>
								  </div>
								  <div class="col-md-12">
									  <input type="submit" value="Send Message" class="main-btn">
								  </div>
								  </div>
							  </div>
						  </form>    
					  </div>
				  </div>
			  </div>
          </div>   
		</div>	
      </section>
      <!-- ==================================================
							End contact-area
      ================================================== -->
	 
	  <!-- ==================================================
							map
      ================================================== -->
	  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d972.0547493820156!2d77.65686612956658!3d12.95783382434521!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6c24b50b5f5588a3!2sPunaadi!5e0!3m2!1sen!2sin!4v1548052381151" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	  <!-- ==================================================
							End map
      ================================================== -->
    
	  <!-- ==================================================
							footer-area
      ================================================== -->
      <div class="footer-area text-center footer-padding background-222">
          <div class="container">
			  <div class="row">
				  <div class="col-md-12 mb-20px">
					  <img alt="img" src="images/logo.png" class="logg">
				  </div>
				  <div class="col-md-12">
					  <div class="social-icons">
						  <a href="#1" class="color-bbb radius-50 mr-5px mb-10px color-fff-hvr background-l-blue-hvr transition-3"><i class="fa fa-facebook"></i></a>
						  <a href="https://twitter.com/Punaadi2" target="_blank" class="color-bbb radius-50 mr-5px mb-10px color-fff-hvr background-l-blue-hvr transition-3"><i class="fa fa-twitter"></i></a>
						  
						  <a href="#1" class="color-bbb radius-50 color-fff-hvr background-l-blue-hvr transition-3"><i class="fa fa-linkedin"></i></a>
					  </div>
				  </div>
				  <div class="col-md-12">
					  <p class="mt-10px mb-0px color-eee">© 2018 Punaadi by <strong class="color-l-blue"><a href="http://www.beamingindia.com/" target="_blank">Beaming India</strong></a> </p>
				  </div>
			  </div>
		  </div>
      </div>
	  <!-- ==================================================
							End footer-area
      ================================================== -->
	  
	  <!-- ==================================================
							scroll-top-btn
      ================================================== -->
	  <div class="scroll-top-btn text-center">
		  <i class="fa fa-angle-up fs-20 color-fff background-333 background-l-blue-hvr radius-50"></i>          
	  </div>
	  <!-- ==================================================
							End scroll-top-btn
      ================================================== -->
	  
	  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/lightbox.js"></script>
    <script src="js/lity.min.js"></script>
	<script src="js/scrollIt.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/validator.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBn-q0VMtMOum5A7HVG86duHeJApbVDv7o"></script>
  	<script src="js/map-white.js"></script>
	<script src="js/main.js"></script>
	<script src="js/wow.min.js"></script>
	<script>new WOW().init();</script>
	  
<!-- Modal Box -->
	<div class="mask" role="dialog"></div>
	<div class="elegant-modal" role="alert">
		<button class="close" role="button">X</button>
		<!-- Content -->
		<div class="col-md-12">
					  <div class="contact-form formpadd">
						  <form class="form" id="contact-form" method="post" action="">
							  <div class="messages"></div>
							  <div class="controls">
								  <div class="row"> 
								  <div class="col-md-6">
									  <div class="form-group">
										  <input id="form_name" class="form-control" type="text" name="name" placeholder="Name"  required="required" data-error="Name is required.">
										  <div class="help-block with-errors color-l-blue"></div>
									  </div>
								  </div>
								  <div class="col-md-6">
									  <div class="form-group">
										  <input id="form_email" class="form-control" type="email" name="email" placeholder="Email" required="required" data-error="email is required.">
									  <div class="help-block with-errors color-l-blue"></div>
									  </div>
								  </div>
								  <div class="col-md-12">
									  <div class="form-group">
										  <input id="form_subject" class="form-control" type="text" name="subject" placeholder="Subject">
										  <div class="help-block with-errors"></div>
									  </div>
								  </div>
								  <div class="col-md-12">
									  <div class="form-group">
										  <textarea id="form_message" class="form-control" name="message" placeholder="Message" rows="6" required="required" data-error="Message."></textarea>
										  <div class="help-block with-errors color-l-blue"></div>
									  </div>
								  </div>
								  <div class="col-md-12">
									  <input type="submit" value="Send Message" class="main-btn">
								  </div>
								  </div>
							  </div>
						  </form>    
					  </div>
				  </div>
	</div>
	
	<script src="js/script-elegant-modal.js"></script>
</body>
</html>