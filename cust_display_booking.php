
<!DOCTYPE html>
<?php 
         #include 'employee_login.php';
         include 'customer_signup_modal.php';
         include 'cust_login_modal.php';
         include 'customer_login.php';
         include 'emp_login_modal.php';
         #include 'config.php';
       
         
         
   ?>
<html lang="en">
<head>
<title>Hotel Transylvania </title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dream Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
<!-- //online-fonts -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->
</head>
<body>
<!-- header -->
<div class="header">
	<div class="agile-top-header">
	<div class="banner-agile-top">
		<div class="number">
			<h3><i class="fa fa-phone" aria-hidden="true"></i> +91 080 987 6541</h3>
		</div>
				<div class="top-icons">
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
	</div>
		<div class="logo">
			<h1><a href="index.html">Hotel<span>Transylvania</span></a></h1>
		</div>
		<!-- navigation -->
		<div class="top-left">
			<div class="top-nav">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
								
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						 <nav class="linkEffects linkHoverEffect_2">
							<ul>
                                                            <li></li><li></li>
								<li><a href="index.php" data-link-alt="Home" class="active"><span>Home</span></a></li> 
								<li><a href="#about" data-link-alt="about" class="scroll"><span>About</span></a></li> 
								<li><a href="#gallery" data-link-alt="gallery" class="scroll"><span>Gallery</span></a></li>							
                                                               
                                                                    
                                                                    <?php                                           
                                                                  
                                                                    if(isset($_SESSION['c_id'])|| isset($_SESSION['e_id'])){ 
                                                                       ?>
                                                                    
                                                                <li ><a href="logout.php" data-link-alt="Log Out"> Log Out</a></li>                 
                                                               <?php }
                                                                    else{?>    
 
                                                                <li><a href="#customersignup" data-link-alt="Sign Up" data-toggle="modal" data-target="#customersignup"><span>Sign Up</span></a></li>
                                                                <li><a href="#customersignin" data-link-alt="Sign In" data-toggle="modal" data-target="#customersignin" class="scroll"><span> Sign In</span></a></li>
                                                                <li><a href="#employeesignin" data-link-alt="Admin" data-toggle="modal" data-target="#employeesignin" class="scroll"><span> Admin</span></a></li>
                                                               <?php }?>
                                                                <li><a href="#contact" data-link-alt="Contact Us" class="scroll"><span>Contact Us</span></a></li>
                                                                
                                                        </ul>
						</nav>
						
					</div>
				</nav>
					<div class="clearfix"> </div>	
				</div>

			</div>
                <?php 
                $var = $_GET['message'];
                if($var == 'Booking successful!'){?>
                    <div class="alert alert-success alert-dismissable fade in">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $_GET['message']; ?></strong>
                       </div> 
                <?php }else{ ?>
                
                <div class="alert alert-info alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong><?php echo $_GET['message']; ?></strong>
                       </div> 
                <?php } ?>
			<div class="clearfix"> </div>	
			<!-- //navigation -->
		</div>
	</div>
	<!--Slider-->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>
						<div class="slider-info">
                                                     <br><br><br><br><br><br><br><br> 
                                                     <br><br><br><br><br><br><br><br> 
							 
						</div> 
					</li>
					<li>
						 <div class="slider-info1">
							 <br><br><br><br><br><br><br><br> 
                                                     <br><br><br><br><br><br><br><br>
						</div>
					</li>
					<li>
						 						<div class="slider-info2">
							 <br><br><br><br><br><br><br><br> 
                                                     <br><br><br><br><br><br><br><br> 
						</div>
					</li>
				</ul>
		 
						<!-- //Modal1 -->
			</div>
			<div class="clearfix"></div>
</div>		
		<!--//Slider-->
           
                    <?php                                           
     if(isset($_SESSION['c_id'])){       
         include 'booking_form.php';                                               
		
                  } ?>
<!-- //header -->
<!-- /about -->
 <div class="w3-aglile-about" id="about">
	<div class="w3-agile-about-grids">
		<div class="w3-aglie-about-grid1">
			<div class="col-md-6 w3-about-text-grid">
				<h3>About us</h3>
				<p> At Hotel Transylvania, we fill your journeys through life with everlasting moments to leave you richer.</p>
					<p>Experience luxury by people who truly love what they do.It is a place that opens guests up to the world around them, creating an authentic sense of place.</p>
                                        <br> <br>
			</div>
			<div class="col-md-6 w3-aglie-about-img-grid1">
		
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="w3-aglie-about-grid2">
			<div class="col-md-4 w3-about-bg-text-grid">
			<div class="w3-about-bg-head">
			<h3>Restaurant</h3>
			<p>National & international cuisine</p>
			 
			</div>
			</div>
				
			<div class="col-md-4 w3-about-text1-grid">
			<div class="w3-about-text-heads">
				<h3>Early Bookings</h3>
				<h4>Save 20%</h4>
				 
				</div>
			</div>
			<div class="col-md-4 w3-about-img-grid">
				
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- /about -->
<!-- /services -->
<div class="services" id="services">
	<div class="container">
	<div class="services-agile-head">
		<h3>Services</h3>
	</div>
		<div class="w3-agile-grids">
			<div class="col-md-6 w3-agile-services-left">
				<div class="w3-services-text">
				<ul class="services-head">
					<li><h3>15</h3></li>
					<li> <h5>years of</h5> </li>
					<li><h5>Experience</h5></li>
				</ul>
				<h4>Go to your happy place!
                                        <br><br> Sometimes life’s greatest pleasure is simply having the time and space to call your own; a “happy place” where you can unwind, relax and renew. Intuitive staff dedicated to your well being allows you to start relaxing the moment you walk through the doors.</h4>	 	 
				</div>	 
		
			</div>
			<div class="col-md-6 w3-agile-services-right">
				<img src="images/ab1.jpg" alt="services">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //services-->
<!-- Gallery -->
<div id="gallery" class="gallery">
	<div class="container">
		<div class="agileits-gal-title">
			<h3>Our gallery</h3>
		</div> 
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Rooms</span></li>
					<li class="resp-tab-item"><span>Mains</span></li>
					<li class="resp-tab-item"><span>Dessert</span></li>
					<li class="resp-tab-item"><span>Drinks & Ice creams</span></li>				
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">
						<div class="col-md-6 portfolio-grids">
								<div class="gallery-text-agile agile-offer1">
								<h3>Double Room<span>Rs. 10000/per night</span></h3>
								<p>Fresh local baby whiting fillets in a sesame and parsley crumb s/w chips salad lemon and tartare... This is a lunch that will leave you asking for mor...</p>
								<ul>
								<li>Adults: 3</li>
								<li>Facilites: Closet with hangers, Digital Personal Safe, HD flat-screen TV (including Satellite TV), Telephone</li>
								<li>Size: 30m²</li>
								<li>Bed Type: two bed</li>
								<li>Categories: Double, Single, Suite</li>
								</ul>
								</div>
								</div>
								<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img1">
									<div class="offer-gallery-img1">
									</div>
									
								</div>
							<div class="clearfix"></div>
							<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img2">
								<div class="offer-gallery-img2">
									</div>
								</div>
								<div class="col-md-6 portfolio-grids">
								<div class="gallery-text-agile agile-offer1">
								<h3>single Room<span>Rs. 5000/per night</span></h3>
								<p>Fresh local baby whiting fillets in a sesame and parsley crumb s/w chips salad lemon and tartare... This is a lunch that will leave you asking for mor...</p>
								<ul>
								<li>Adults: 2</li>
								<li>Facilites: Closet with hangers, Digital Personal Safe, HD flat-screen TV (including Satellite TV), Telephone</li>
								<li>Size: 30m²</li>
								<li>Bed Type: One bed</li>
								<li>Categories: Double, Single</li>
								</ul>
								</div>
								</div>
								<div class="clearfix"></div>
						</div>
					<div class="tab-2 resp-tab-content">
						<div class="col-md-6 portfolio-grids">
								<div class="gallery-text-agile agile-offer1">
								<h3>Crumbed Whiting<span>Rs. 799</span></h3>
								<p>Fresh local baby whiting fillets in a sesame and parsley crumb s/w chips salad lemon and tartare... This is a lunch that will leave you asking for mor...</p>
								</div>
								<div class="gallery-text-agile agile-offer2">
								<h3>Chicken Parmagiana<span>Rs. 999</span></h3>
								<p>Chicken Surf & Turf $31 Char grilled garlic chicken breast fillet topped with a garlic seafood sauce & served with garden salad & steak fries or with ...</p>
								
								</div>
								<div class="gallery-text-agile agile-offer3">
								<h3>Gluten Free Surf & Turf<span>RS. 899</span></h3>
								<p>Julliene veggies & rice noodles with mint coriander & cashew nuts nestled in mixed leaves and finished with sesame oil and a lime dressing.</p>

								</div>
								</div>
								<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img3">
									<div class="offer-gallery-img3">
									</div>
								</div>
							<div class="clearfix"></div>
						</div>
						<div class="tab-3 resp-tab-content">
						<div class="col-md-6 portfolio-grids">
								<div class="gallery-text-agile agile-offer1">
								<h3>Organic Yoghurt Panna Cotta<span>RS. 899</span></h3>
								<p>Blackcurrant & limoncello compote, crunchy spiced crumble & lemon zest</p>
								</div>
								<div class="gallery-text-agile agile-offer2">
								<h3>Jamies Favorite Orange Cake<span>Rs. 799</span></h3>
								<p>Served with whipped crème fraîche, fresh orange & pomegranate</p>
								
								</div>
								<div class="gallery-text-agile agile-offer3">
								<h3>Vin Sano Tiramisu<span>RS. 599</span></h3>
								<p>The classic Italian dessert with vin santo, chocolate shavings & orange zest</p>

								</div>
								</div>
								<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img4">
									<div class="offer-gallery-img4">
									</div>
								</div>
							<div class="clearfix"></div>
					</div>
					<div class="tab-4 resp-tab-content">
						<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img5">
									<div class="offer-gallery-img5">
									</div>
								</div>
								<div class="col-md-6 portfolio-grids">
									<div class="gallery-text-agile agile-offer1">
									<h3>Organic Yoghurt Cotta<span>RS. 699</span></h3>
									<p>Blackcurrant & limoncello compote, crunchy spiced crumble & lemon zest</p>
									</div>
									<div class="gallery-text-agile agile-offer2">
										<h3>Jamie Blossom Poleta Cake<span>Rs. 1299</span></h3>
										<p>Served with whipped crème fraîche, fresh orange & pomegranate</p>
								
									</div>
									<div class="gallery-text-agile agile-offer3">
                                                                            <h3>Vin Sano Tiramisu<span>Rs. 899</span></h3>
										<p>The classic Italian dessert with vin santo, chocolate shavings & orange zest</p>

									</div>
								</div>
						<div class="clearfix"> </div>
						<div class="col-md-3 ice-cream-agile ice-cream-agile-img1 ">
						
						</div>
						<div class="col-md-3 ice-cream-agile ice-cream-agile-img2">
						
						</div>
						<div class="col-md-3 ice-cream-agile ice-cream-agile-img3">
						
						</div>
						<div class="col-md-3 ice-cream-agile ice-cream-agile-img4">
						
						</div>
						<div class="clearfix"> </div>
			     </div>
	</div>

</div>
						
</div>
</div>
</div>
<!-- //Gallery -->

<!-- Testimonials -->
	<div id="review" class="jarallax reviews agile-1" >
				<div class="w3-agile-test-monials" id="testimonials">
					<div class="client-review-head">
						<h3>Our customers Says</h3>
						<div class="sreen-gallery-cursual">
						       <div id="owl-demo" class="owl-carousel">
					                 <div class="item-owl">
					                		<div class="test-review wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
											   <p><img src="images/left-quotes.png" alt=""> Polite sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco<img src="images/right-quotes.png" alt=""></p>
						                	  <img src="images/test2.jpg" class="img-responsive" alt=""/>
											  <h5>Henry</h5>
					                	    </div>
					                </div>
					                 <div class="item-owl">
					                	<div class="test-review wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
										 <p> <img src="images/left-quotes.png" alt="">Polite sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco<img src="images/right-quotes.png" alt=""></p>
						                	<img src="images/test1.jpg" class="img-responsive" alt=""/>
											 <h5>Smith</h5>
					                	</div>
					                </div>
					                 <div class="item-owl">
					                	<div class="test-review wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
										     <p><img src="images/left-quotes.png" alt=""> Polite sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <img src="images/right-quotes.png" alt=""></p>
						                	<img src="images/test3.jpg" class="img-responsive" alt=""/>
											 <h5>Steave</h5>
					                	</div>
					                </div>
				              </div>
						<!--//screen-gallery-->
					</div>
				</div>
				<div class="clearfix"> </div>
		</div>
</div>
<!-- //Testimonials -->


<!-- js files -->
	<!-- For-Banner -->
		 <script src="js/responsiveslides.min.js"></script>
		 <script>
			// You can also use "$(window).load(function() {"
			$(function () {
			  $("#slider").responsiveSlides({
				auto: true,
				manualControls: '#slider3-pager',
			  });
			});
		  </script>
	<!-- //For-Banner -->
		<!-- contact form -->
<div class="contact-form" id="contact-form">
	<div class="container">
		<div class="contact-agileits-title"> 
			<h3>Contact Us</h3> 
		</div>	
		<div class="clearfix"></div>
		       <!--get in touch start here-->
			<div class="get-touch" id="contact1">
					<div class="get-touch-main">
						<div class="get-touch-bottom">
							<form action="#" method="post">
							<input type="text" placeholder="First Name" name="First Name" required="">
							<input type="text" class="no-mar" placeholder="Last Name" required="">
							<input type="text" placeholder="Phone Number" name="phone" required="">
							<input type="email" class="no-mar" placeholder="Email" name="Email" required="">
							<textarea placeholder="Message" name="Message" required="" ></textarea>
							<input type="submit" value="Submit">
							</form>
						</div>
					</div>
			</div>
<!--get in touch end here-->
	</div>
</div>

	<!-- contact -->
 <div class="contact" id="contact">
		<div class="map">
			  
                    <br><br><br><br><br>
			<div class="container">
				<div class="agileinfo_map_color">
					<div class="agileinfo_map_color_grid">
						<div class="col-md-5 contact-up">
							<div class="agileinfo_map_color_grid_left">
								<h4>Contact us</h4>
							<p>Veermata Jijabai <span>Matunga Mumbai</span></p>
							<p>+91 9111112222</p>
							<p>+91 3222233333</p>
								
							</div>
						</div>
						<div class="col-md-5 contact-up1">
							<div class="agileinfo_map_color_grid_left">
								<h4>Mail us</h4>
								<p><a href="mailto:example@mail.com"> mail@example.com</a></p>
								<h4>catch on</h4>
								<ul class="map-top-icon">
								<li><i class="fa fa-facebook" aria-hidden="true"></i></li>
								<li><i class="fa fa-twitter" aria-hidden="true"></i></li>
								<li><i class="fa fa-google-plus" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						 
                                           
					</div>
				</div>
			</div>
		</div>
		
</div>
<!-- //contact -->
<!--footer-->
<br><br><br><br><br>
<div class="footer-w3">
	<p>&copy; 2017 Hotel Transylvania</p>
</div>
<!--//footer-->
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true   // 100% fit in a container
				});
			});		
		</script>
		<!-- //script for portfolio -->
	<!-- //For-Gallery-js -->
<!-- for-Testimonials -->
			<!-- required-js-files-->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
			<!--//required-js-files-->
		<!-- //for-Testimonials -->
<!-- Calendar -->
			<link rel="stylesheet" href="css/jquery-ui.css" />
			<script src="js/jquery-ui.js"></script>
			  <script>
					  $(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
					  });
			  </script>
		<!-- //Calendar -->
		 <!-- start-smoth-scrolling -->
				<script type="text/javascript" src="js/move-top.js"></script>
				<script type="text/javascript" src="js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
		<!-- start-smoth-scrolling -->
		<!-- smooth scrolling-bottom-to-top -->
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
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				<script src="js/SmoothScroll.min.js"></script>


    


</body>
</html>