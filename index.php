
<?php
	include "conn.php";
	session_start();
	if(empty ($_SESSION)){
		header("Location: login.php");
	}else{
		$email = $_SESSION['email'];

		$get_details = mysqli_query($conn, "SELECT * FROM profile WHERE email ='$email'");
		while($row = mysqli_fetch_object($get_details)){
			$firstname = $row -> firstname;
			$lastname = $row -> lastname;
		}
	}
?>



<html lang="zxx">
<head>
	<title>Serenity | Yoga</title>
	<meta charset="UTF-8">
	<meta name="description" content="Serenity Yoga HTML Template">
	<meta name="keywords" content="yoga, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" 
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" 
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>

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
						<i class="material-icons">map	</i>
						<p> 143 Iznart Street</p>
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
					<li><a href="index.php" class="active">Home</a></li>
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
					
					<li><a href="contact.php">Contact</a></li>
					<li><a href="logout.php">Logout</a></li>
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
					<h1 id="menu-txt">Serenity <span class="Serenity">Yoga</span></h1>
				</a>
				<p>Developers</p>
				<div class="insta-imgs">
					<div class="insta-item">
						<div class="insta-img">
							<img src="img/gabriel.jpg" width="323" height="110"/>
							<div class="insta-hover">
								<i class="fa fa-instagram"></i>
								<p>Gabriel Limsiaco</p>
							</div>
						</div>
					</div>
					<div class="insta-item">
						<div class="insta-img">
							<img src="img/cris.jpg" width="323" height="110"/>
							<div class="insta-hover">
								<i class="fa fa-instagram"></i>
								<p>John Cris Villahermosa</p>
							</div>
						</div>
					</div>
					<div class="insta-item">
						<div class="insta-img">
							<img src="img/mia.png" width="323" height="110"/>
							<div class="insta-hover">
								<i class="fa fa-instagram"></i>
								<p>Georgina Mia Casama</p>
							</div>
						</div>
					</div>
					<div class="insta-item">
						<div class="insta-img">
							<img src="img/justin.png" width="323" height="110"/>
							<div class="insta-hover">
								<i class="fa fa-instagram"></i>
								<p>Justin Paolo Salvana</p>
							</div>
						</div>
					</div>
					<div class="insta-item">
						<div class="insta-img">
							<img src="img/frits.png" width="323" height="110"/>
							<div class="insta-hover">
								<i class="fa fa-instagram"></i>
								<p>John Fritz Centeno</p>
							</div>
						</div>
					</div>
					<div class="insta-item">
						<div class="insta-img">
							<img src="img/jetrho.png" width="323" height="110"/>
							<div class="insta-hover">
								<i class="fa fa-instagram"></i>
								<p>Jethro Velonero</p>
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
	                                                                              
	<!-- Hero Section -->
	<section class="hero-section">
		<div class="hero-social-warp">
			<div class="hero-social">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
			</div>
		</div>
		<div class="arrow-buttom">
			<img src="img/icons/arrows-buttom.png" alt="">
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="hs-style-1 text-center">
					<img src="img/hero-slider/1.png" alt="">
				</div>
			</div>
			<div class="hs-item">
				<div class="hs-style-2">
					<div class="container-fluid h-100">
						<div class="row h-100">
							<div class="col-lg-6 h-100 d-none d-lg-flex align-items-xl-end align-items-lg-center">
								<div class="hs-img">
									<img src="img/hero-slider/2.png" alt="">
								</div>
							</div>
							<div class="col-lg-6 d-flex align-items-center">
								<div class="hs-text-warp">
									<div class="hs-text">
										<h2>Get slim and toned with yoga</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos-trud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



			<div class="hs-item">
				<div class="hs-style-3 text-center">
					<div class="container">
						<div class="hs-text">
							<h2>Reduce your stress</h2>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
						</div>
					</div>
					<div class="hs-img">
						<img src="img/hero-slider/3.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

  
    <!-- Modal for create members account-->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><i class="fa fa-window-close" aria-hidden="true"></i></button>
      </div>
      <div class="modal-body">
        <form action="process.php" method="POST" enctype="multipart/form-data">
        

        <label>FIRST NAME</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
          <input type="text" class="form-control" required name="firstname" placeholder=" Enter First Name...">
        </div></p>

        <label>LAST NAME</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
          <input type="text" class="form-control" required name="lastname" placeholder=" Enter Last Name...">
        </div></p>

		<label>AGE</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
          <input type="text" class="form-control" required name="age" placeholder=" Enter Age...">
        </div></p>

        <label>EMAIL</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
          <input type="email" class="form-control" required name="email" placeholder=" Enter Email...">
        </div></p>

        <label>PASSWORD</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
          <input type="password" class="form-control" required name="password" placeholder=" Enter Password...">
        </div></p>
        
      </div>
      <div class="modal-footer">
        <input type="reset" class="btn btn-primary" value="CLEAR">
        <input type="submit" class="btn btn-success" name="create_account" value="CREATE"> 
		
      </div>
        </form>
    </div>
  </div>
</div>

	<!-- Hero Section end -->

	<!-- About Section -->
	<section class="about-section spad">
		<div class="container">
			<div class="section-title text-center">
				<img src="img/icons/logo-icon.png" alt="">
				<h2>Welcome to Serenity Yoga</h2>
				<p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="about-img">
						<img src="img/about.png" alt="">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about-item">
						<div class="ai-icon">
							<img src="img/icons/about-1.png" alt="">
						</div>
						<div class="ai-text">
							<h4>Full Rejuvenation</h4>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
					<div class="about-item">
						<div class="ai-icon">
							<img src="img/icons/about-2.png" alt="">
						</div>
						<div class="ai-text">
							<h4>Extension of Spring</h4>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem a cusantium doloremque.</p>
						</div>
					</div>
					<div class="about-item">
						<div class="ai-icon">
							<img src="img/icons/about-3.png" alt="">
						</div>
						<div class="ai-text">
							<h4>Against Aging</h4>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
						</div>
					</div>
					<a href="" class="site-btn sb-gradient mt-5">explore more</a>
				</div>
			</div>
		</div>
	</section>
	<!-- About Section end -->

	<!-- Classes Section -->
	<section class="classes-section spad">
		<div class="container">
			<div class="section-title text-center">
				<img src="img/icons/logo-icon.png" alt="">
				<h2>Popular Classes</h2>
				<p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
			</div>
			<div class="classes-slider owl-carousel">
				<div class="classes-item">
					<div class="ci-img">
						<img src="img/classes/1.jpg" alt="">
					</div>
					<div class="ci-text">
						<h4><a href="classes-details.php">Artistic Yoga</a></h4>
						<div class="ci-metas">
							<div class="ci-meta"><i class="material-icons">event_available</i>Mon, Wed, Fri</div>
							<div class="ci-meta"><i class="material-icons">alarm_on</i>06:30pm - 07:45pm</div>
						</div>
						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis</p>
					</div>
					<div class="ci-bottom">
						<div class="ci-author">
							<img src="img/classes/author/1.jpg" alt="">
							<div class="author-text">
								<h6>Victoria Webb</h6>
								<p>Yoga Trainer</p>
							</div>
						</div>
						<a href="" class="site-btn sb-gradient">book now</a>
					</div>
				</div>
				<div class="classes-item">
					<div class="ci-img">
						<img src="img/classes/2.jpg" alt="">
					</div>
					<div class="ci-text">
						<h4>Traditional Hatha</h4>
						<div class="ci-metas">
							<div class="ci-meta"><i class="material-icons">event_available</i>Mon, Wed, Fri</div>
							<div class="ci-meta"><i class="material-icons">alarm_on</i>06:30pm - 07:45pm</div>
						</div>
						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis</p>
					</div>
					<div class="ci-bottom">
						<div class="ci-author">
							<img src="img/classes/author/2.jpg" alt="">
							<div class="author-text">
								<h6>Victoria Webb</h6>
								<p>Yoga Trainer</p>
							</div>
						</div>
						<a href="" class="site-btn sb-gradient">book now</a>
					</div>
				</div>
				<div class="classes-item">
					<div class="ci-img">
						<img src="img/classes/3.jpg" alt="">
					</div>
					<div class="ci-text">
						<h4>Yoga Therapy</h4>
						<div class="ci-metas">
							<div class="ci-meta"><i class="material-icons">event_available</i>Mon, Wed, Fri</div>
							<div class="ci-meta"><i class="material-icons">alarm_on</i>06:30pm - 07:45pm</div>
						</div>
						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis</p>
					</div>
					<div class="ci-bottom">
						<div class="ci-author">
							<img src="img/classes/author/3.jpg" alt="">
							<div class="author-text">
								<h6>Victoria Webb</h6>
								<p>Yoga Trainer</p>
							</div>
						</div>
						<a href="" class="site-btn sb-gradient">book now</a>
					</div>
				</div>
				<div class="classes-item">
					<div class="ci-img">
						<img src="img/classes/2.jpg" alt="">
					</div>
					<div class="ci-text">
						<h4>Traditional Hatha</h4>
						<div class="ci-metas">
							<div class="ci-meta"><i class="material-icons">event_available</i>Mon, Wed, Fri</div>
							<div class="ci-meta"><i class="material-icons">alarm_on</i>06:30pm - 07:45pm</div>
						</div>
						<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis</p>
					</div>
					<div class="ci-bottom">
						<div class="ci-author">
							<img src="img/classes/author/2.jpg" alt="">
							<div class="author-text">
								<h6>Victoria Webb</h6>
								<p>Yoga Trainer</p>
							</div>
						</div>
						<a href="" class="site-btn sb-gradient">book now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Classes Section end -->

	<!-- Trainer Section -->
	<section class="trainer-section overflow-hidden spad">
		<div class="container">
			<div class="section-title text-center">
				<img src="img/icons/logo-icon.png" alt="">
				<h2>Our Trainer Yoga</h2>
				<p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
			</div>
			<div class="trainer-slider owl-carousel">
				<div class="ts-item">
					<div class="trainer-item">
						<div class="ti-img">
							<img src="img/trainer/1.png" alt="">
						</div>
						<div class="ti-text">
							<h4>Lori Kennedy</h4>
							<h6>Yoga Trainer</h6>
							<p>Yoga & Therapy Certificate of Uttarakhand University Sanskrit</p>
							<div class="ti-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="ts-item">
					<div class="trainer-item">
						<div class="ti-img">
							<img src="img/trainer/2.png" alt="">
						</div>
						<div class="ti-text">
							<h4>Lori Kennedy</h4>
							<h6>Yoga Trainer</h6>
							<p>Yoga & Therapy Certificate of Uttarakhand University Sanskrit</p>
							<div class="ti-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="ts-item">
					<div class="trainer-item">
						<div class="ti-img">
							<img src="img/trainer/3.png" alt="">
						</div>
						<div class="ti-text">
							<h4>Rebecca James</h4>
							<h6>Yoga Trainer</h6>
							<p>Yoga & Therapy Certificate of Uttarakhand University Sanskrit</p>
							<div class="ti-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Trainer Section end -->

	<!-- Review Section -->
	<section class="review-section spad set-bg" data-setbg="img/review-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 m-auto">
					<div class="review-slider owl-carousel">
						<div class="review-item">
							<div class="ri-img">
								<img src="img/classes/author/1.jpg" alt="">
							</div>
							<div class="ri-text text-white">
								<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness.</p>
								<h4>Denise Thomas</h4>
								<h6>Designer</h6>
							</div>
						</div>
						<div class="review-item">
							<div class="ri-img">
								<img src="img/classes/author/2.jpg" alt="">
							</div>
							<div class="ri-text text-white">
								<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness.</p>
								<h4>Denise Thomas</h4>
								<h6>Designer</h6>
							</div>
						</div>
						<div class="review-item">
							<div class="ri-img">
								<img src="img/classes/author/3.jpg" alt="">
							</div>
							<div class="ri-text text-white">
								<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness.</p>
								<h4>Denise Thomas</h4>
								<h6>Designer</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review Section end -->

	<!-- Event Section -->
	<section class="event-section spad">
		<div class="container">
			<div class="section-title text-center">
				<img src="img/icons/logo-icon.png" alt="">
				<h2>Upcoming Events</h2>
				<p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
			</div>
			<div class="row">
				<div class="col-xl-6">
					<div class="event-video">
						<img src="img/video.jpg" alt="">
						<a href="https://www.youtube.com/watch?v=vgv-hzTl5FA" class="video-popup"><img src="img/icons/play.png" alt=""></a>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="event-item">
						<div class="ei-img">
							<img src="img/event/1.jpg" alt="">
						</div>
						<div class="ei-text">
							<h4><a href="#">Lole White Yoga Tour</a></h4>
							<ul>
								<li><i class="material-icons">person</i>Kelly Alexander</li>
								<li><i class="material-icons">event_available</i>15 May, 2024</li>
								<li><i class="material-icons">map</i>143 Iznart Street</li>
							</ul>
						</div>
					</div>
					<div class="event-item">
						<div class="ei-img">
							<img src="img/event/2.jpg" alt="">
						</div>
						<div class="ei-text">
							<h4>Free Yoga Madrid</h4>
							<ul>
								<li><i class="material-icons">person</i>Kelly Alexander</li>
								<li><i class="material-icons">event_available</i>20 April, 2024</li>
								<li><i class="material-icons">map</i>Robinsons Mall</li>
							</ul>
						</div>
					</div>
					<div class="event-item">
						<div class="ei-img">
							<img src="img/event/3.jpg" alt="">
						</div>
						<div class="ei-text">
							<h4>One Love Dallas</h4>
							<ul>
								<li><i class="material-icons">person</i>Kelly Alexander</li>
								<li><i class="material-icons">event_available</i>15 April, 2024</li>
								<li><i class="material-icons">map</i>Festive Walk</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Event Section end -->


	<!-- Pricing Section -->
	<section class="pricing-section spad">
		<div class="container">
			<div class="section-title text-center">
				<img src="img/icons/logo-icon.png" alt="">
				<h2>Pricing plans</h2>
				<p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-item begginer">
						<div class="pi-top">
							<h4>Begginer</h4>
						</div>
						<div class="pi-price">
							<h3>₱1,500</h3>
							<p>Per month</p>
						</div>
						<ul>
							<li>Take Up To 7 Classes</li>
							<li>Available To Anyone</li>
							<li>Towels Included</li>
							<li>Never Expires</li>
						</ul>
						<a href="#" class="site-btn sb-line-gradient">Get started</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-item entermediate">
						<div class="pi-top">
							<h4>Entermediate</h4>
						</div>
						<div class="pi-price">
							<h3>₱2,500</h3>
							<p>Per month</p>
						</div>
						<ul>
							<li>Take Up To 7 Classes</li>
							<li>Available To Anyone</li>
							<li>Towels Included</li>
							<li>Never Expires</li>
						</ul>
						<a href="#" class="site-btn sb-line-gradient">Get started</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-item advanced">
						<div class="pi-top">
							<h4>Advanced</h4>
						</div>
						<div class="pi-price">
							<h3>₱3,500</h3>
							<p>Per month</p>
						</div>
						<ul>
							<li>Take Up To 7 Classes</li>
							<li>Available To Anyone</li>
							<li>Towels Included</li>
							<li>Never Expires</li>
						</ul>
						<a href="#" class="site-btn sb-line-gradient">Get started</a>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="pricing-item professional">
						<div class="pi-top">
							<h4>Professional</h4>
						</div>
						<div class="pi-price">
							<h3>₱5,000</h3>
							<p>Per month</p>
						</div>
						<ul>
							<li>Take Up To 7 Classes</li>
							<li>Available To Anyone</li>
							<li>Towels Included</li>
							<li>Never Expires</li>
						</ul>
						<a href="#" class="site-btn sb-line-gradient">Get started</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Pricing Section end -->

	

	<!-- Gallery Section -->
	<div class="gallery-section">
		<div class="gallery-slider owl-carousel">
			<div class="gs-item">
				<img src="img/gallery/1.jpg" alt="">
				<div class="gs-hover">
					<i class="fa fa-instagram"></i>
					<p>serenity.yoga</p>
				</div>
			</div>
			<div class="gs-item">
				<img src="img/gallery/2.jpg" alt="">
				<div class="gs-hover">
					<i class="fa fa-instagram"></i>
					<p>serenity.yoga</p>
				</div>
			</div>
			<div class="gs-item">
				<img src="img/gallery/3.jpg" alt="">
				<div class="gs-hover">
					<i class="fa fa-instagram"></i>
					<p>serenity.yoga</p>
				</div>
			</div>
			<div class="gs-item">
				<img src="img/gallery/4.jpg" alt="">
				<div class="gs-hover">
					<i class="fa fa-instagram"></i>
					<p>serenity.yoga</p>
				</div>
			</div>
			<div class="gs-item">
				<img src="img/gallery/5.jpg" alt="">
				<div class="gs-hover">
					<i class="fa fa-instagram"></i>
					<p>serenity.yoga</p>
				</div>
			</div>
			<div class="gs-item">
				<img src="img/gallery/6.jpg" alt="">
				<div class="gs-hover">
					<i class="fa fa-instagram"></i>
					<p>serenity.yoga</p>
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
						<h1 id="menu-txt">Serenity<span class="yoga-txt">Yoga</span></h1>
							<p>Lorem ipsum dolor sit amet, consec-tetur adipiscing elit sed.</p>
							<ul>
								<li><i class="material-icons">phone</i>(965) 436 3274</li>
								<li><i class="material-icons">email</i>serenity.yoga@gmail.com</li>
								<li><i class="material-icons">map</i>143 Iznart Streets</li>
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
