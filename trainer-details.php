<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Ahana | Yoga HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Ahana Yoga PHP Template">
	<meta name="keywords" content="yoga, php">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<header class="header-section">
		<div class="header-top">
			<div class="row m-0">
				<div class="col-md-6 d-none d-md-block p-0">
					<div class="header-info">
						<i class="material-icons">map</i>
						<p>184 Main Collins Street</p>
					</div>
					<div class="header-info">
						<i class="material-icons">phone</i>
						<p>(965) 436 3274</p>
					</div>
				</div>
				<div class="col-md-6 text-left text-md-right p-0">
					<div class="header-info d-none d-md-inline-flex">
						<i class="material-icons">alarm_on</i>
						<p>Mon - Fri:  6:30am - 07:45pm</p>
					</div>
					<div class="header-info">
						<i class="material-icons">language</i>
						<select id="language" class="language-select">
							<option data-display="Language">EN</option>
							<option data-display="Language" value="1">ES</option>
							<option data-display="Language" value="2">JA</option>
							<option data-display="Language" value="2">AR</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<a href="index.php" class="site-logo">
			<h1>Serenity <span class="yoga-txt">Yoga</span></h1>
			</a>
			<div class="hb-right">
				<div class="hb-switch" id="search-switch">
					<img src="img/icons/search.png" alt="">
				</div>
				<div class="hb-switch" id="infor-switch">
					<img src="img/icons/bars.png" alt="">
				</div>
			</div>
			<div class="container">
				<ul class="main-menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="classes.php">Classes</a>
						<ul class="sub-menu">
							<li><a href="classes.php">Our Claasses</a></li>
							<li><a href="classes-details.php">Claasses Details</a></li>
						</ul>
					</li>
					<li><a href="trainer.php">trainers</a>
						<ul class="sub-menu">
							<li><a href="trainer.php">Our Trainers</a></li>
							<li><a href="trainer-details.php">Trainers Details</a></li>
						</ul>
					</li>
					<li><a href="events.php">events</a>
						<ul class="sub-menu">
							<li><a href="events.php">Our Events</a></li>
							<li><a href="event-details.php">Events Details</a></li>
						</ul>
					</li>
					<li><a href="blog.php">Blog</a>
						<ul class="sub-menu">
							<li><a href="blog.php">Our Blog</a></li>
							<li><a href="single-blog.php">Blog Details</a></li>
						</ul>
					</li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header Section end -->

	<!-- Infor Model -->
	<div class="infor-model-warp">
		<div class="infor-model d-flex align-items-center">
			<div class="infor-close">
				<i class="material-icons">close</i>
			</div>
			<div class="infor-middle">
				<a href="#" class="infor-logo">
				<h1>Serenity <span class="yoga-txt">Yoga</span></h1>
				</a>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
				<div class="insta-imgs">
					<div class="insta-item">
						<div class="insta-img">
							<img src="img/infor/1.jpg" alt="">
							<div class="insta-hover">
								<i class="fa fa-instagram"></i>
								<p>ahana.yoga</p>
							</div>
						</div>
					</div>
					<div class="insta-item">
						<div class="insta-img">
							<img src="img/infor/2.jpg" alt="">
							<div class="insta-hover">
								<i class="fa fa-instagram"></i>
								<p>ahana.yoga</p>
							</div>
						</div>
					</div>
					<div class="insta-item">
						<div class="insta-img">
							<img src="img/infor/3.jpg" alt="">
							<div class="insta-hover">
								<i class="fa fa-instagram"></i>
								<p>ahana.yoga</p>
							</div>
						</div>
					</div>
					<div class="insta-item">
						<div class="insta-img">
							<img src="img/infor/4.jpg" alt="">
							<div class="insta-hover">
								<i class="fa fa-instagram"></i>
								<p>ahana.yoga</p>
							</div>
						</div>
					</div>
					<div class="insta-item">
						<div class="insta-img">
							<img src="img/infor/5.jpg" alt="">
							<div class="insta-hover">
								<i class="fa fa-instagram"></i>
								<p>ahana.yoga</p>
							</div>
						</div>
					</div>
					<div class="insta-item">
						<div class="insta-img">
							<img src="img/infor/6.jpg" alt="">
							<div class="insta-hover">
								<i class="fa fa-instagram"></i>
								<p>ahana.yoga</p>
							</div>
						</div>
					</div>
				</div>
				<form class="infor-form">
					<input type="text" placeholder="Your Email">
					<button><img src="img/icons/send.png" alt=""></button>
				</form>
				<div class="insta-social">
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Infor Model end -->
	                                                                              
	<!-- Page top Section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 m-auto text-white">
					<h2>Trainers details</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- Trainers Section -->
	<section class="trainer-details-section spad overflow-hidden">
		<div class="container">
			<div class="trainer-details">
				<div class="trainer-info">
					<div class="td-left">
						<img src="img/classes/1.jpg" alt="">
						<div class="td-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="td-right">
						<h3>Olivia Richards</h3>
						<h6>Yoga Trainer</h6>
						<ul>
							<li><strong>Experience:</strong><p>8 years</p></li>
							<li><strong>Email:</strong><p>emily-walker@example.com</p></li>
							<li><strong>Biography:</strong><p>Certification from the National Institute of Sports Medicine (NASM) USA. 25 years of sports training in the United States, Germany, Hong Kong, Malaysia, Singapore, and now Vietnam at California Fitness & Yoga Centers.</p></li>
						</ul>
						<a href="#" class="site-btn sb-gradient">View classes</a>
					</div>
				</div>
				<div class="trainer-details-text">
					<h3>About Yoga</h3>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
					<ul>
						<li><i class="material-icons">check_circle</i>Gold Medal for International Yoga Championship 2012.</li>
						<li><i class="material-icons">check_circle</i>Silver Medal of All High Schools Championship and Indian Yoga Club in 2010.</li>
						<li><i class="material-icons">check_circle</i>Gold Medal for Jharkhand State Yoga Championship in 2007.</li>
						<li><i class="material-icons">check_circle</i>Gold Medal for East India Yoga Championship in 2005.</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Trainers Section end -->

	<!-- Gallery Section -->
	<div class="gallery-section">
		<div class="gallery-slider owl-carousel">
			<div class="gs-item">
				<img src="img/gallery/1.jpg" alt="">
				<div class="gs-hover">
					<i class="fa fa-instagram"></i>
					<p>ahana.yoga</p>
				</div>
			</div>
			<div class="gs-item">
				<img src="img/gallery/2.jpg" alt="">
				<div class="gs-hover">
					<i class="fa fa-instagram"></i>
					<p>ahana.yoga</p>
				</div>
			</div>
			<div class="gs-item">
				<img src="img/gallery/3.jpg" alt="">
				<div class="gs-hover">
					<i class="fa fa-instagram"></i>
					<p>ahana.yoga</p>
				</div>
			</div>
			<div class="gs-item">
				<img src="img/gallery/4.jpg" alt="">
				<div class="gs-hover">
					<i class="fa fa-instagram"></i>
					<p>ahana.yoga</p>
				</div>
			</div>
			<div class="gs-item">
				<img src="img/gallery/5.jpg" alt="">
				<div class="gs-hover">
					<i class="fa fa-instagram"></i>
					<p>ahana.yoga</p>
				</div>
			</div>
			<div class="gs-item">
				<img src="img/gallery/6.jpg" alt="">
				<div class="gs-hover">
					<i class="fa fa-instagram"></i>
					<p>ahana.yoga</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Gallery Section end -->

	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<div class="about-widget">
						<h1>Serenity <span class="yoga-txt">Yoga</span></h1>
							<p>Lorem ipsum dolor sit amet, consec-tetur adipiscing elit sed.</p>
							<ul>
								<li><i class="material-icons">phone</i>(965) 436 3274</li>
								<li><i class="material-icons">email</i>ahana.yoga@gmail.com</li>
								<li><i class="material-icons">map</i>184 Main Collins Street</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget pl-0 pl-lg-5">
						<h2 class="fw-title">Company</h2>
						<ul>
							<li><a href="#">Online Education</a></li>
							<li><a href="#">Gallery</a></li>
							<li><a href="#">Special Issues</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-sm-6">
					<div class="footer-widget">
						<h2 class="fw-title">About Us</h2>
						<ul>
							<li><a href="#">Our Vision</a></li>
							<li><a href="#">Our Mission</a></li>
							<li><a href="#">Meet The Team</a></li>
							<li><a href="#">Introduce</a></li>
							<li><a href="#">Customer Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="footer-widget pl-0 pl-lg-5">
						<h2 class="fw-title">Open time</h2>
						<ul>
							<li><i class="material-icons">alarm_on</i>Mon - Fri:  6:30am - 07:45pm</li>
							<li><i class="material-icons">alarm_on</i>Sat - Sun:  8:30am - 05:45pm</li>
						</ul>
						<form class="infor-form">
							<input type="text" placeholder="Your Email">
							<button><img src="img/icons/send.png" alt=""></button>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="row">
					<div class="col-md-4">
						<div class="footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="col-md-8 text-md-right">
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Section end -->
	
	<div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

	<!-- Search model -->
	<div class="search-model set-bg" data-setbg="img/search-bg.jpg">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch"><i class="material-icons">close</i></div>
			<form class="search-moderl-form">
				<input type="text" id="search-input" placeholder="Search">
				<button><img src="img/icons/search-2.png" alt=""></button>
			</form>
		</div>
	</div>
	<!-- Search model end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
