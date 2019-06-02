<!DOCTYPE HTML>
<html lang="en-US">
<head>
  
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content="Fruit Shop is new Html theme that we have designed to help you transform your store into a beautiful online showroom. This is a fully responsive Html theme, with multiple versions for homepage and multiple templates for sub pages as well" />
	<meta name="keywords" content="Fruit,7uptheme" />
	<meta name="robots" content="noodp,index,follow" />
	<meta name='revisit-after' content='1 days' />
	<link rel="shortcut icon" type="image/x-icon" href="images/icon/favicon_tkv.png">
	<title>Faps | HOME</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/libs/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/libs/ionicons.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/libs/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/libs/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/libs/jquery.fancybox.css"/>
	<link rel="stylesheet" type="text/css" href="css/libs/jquery-ui.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/libs/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="css/libs/owl.transitions.css"/>
	<link rel="stylesheet" type="text/css" href="css/libs/jquery.mCustomScrollbar.css"/>
	<link rel="stylesheet" type="text/css" href="css/libs/owl.theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/libs/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/libs/animate.css"/>
	<link rel="stylesheet" type="text/css" href="css/libs/hover.css"/>
	<link rel="stylesheet" type="text/css" href="css/color.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/theme.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/browser.css" media="all"/>
	 
	
</head>
<body class="preload">
<div class="wrap">
	<header id="header">
		<div class="header">
			 
							 
						</div>
					</div>
				</div>
			</div>
			<!-- End Top Header -->
			<div class="main-header">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-sm-5 col-xs-12">
							 
						</div>
							<div class="col-md-5 col-sm-5 col-xs-12">
							<div class="mini-cart-box mini-cart1 pull-right">
								 
							<h1 style="color:#66CC33; font-size:60px;">FaPS</h1>	 
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- End Main Header -->
			<div class="nav-header bg-white header-ontop">
				<div class="container">
					<nav class="main-nav main-nav1">
						<!-- <ul>
							<li class="current-menu-item menu-item-has-children">
								<a href="login.php">Home</a>
								<ul class="sub-menu">
								 
								</ul>
							</li>
		 
							<li><a href="#">Features</a></li>
							<li><a href="#">Pages</a></li>
			 
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul> -->
						<a href="#" class="toggle-mobile-menu"><span></span></a>
					</nav>
				</div>
			</div>
			<!-- End Nav Header -->
		</div>
	</header>
	<!-- End Header -->
	<div id="content">
		<div class="content-page">
			<div class="container">
				<div class="shop-banner banner-adv line-scale zoom-image">
					<a href="#" class="adv-thumb-link"><img src="images/login_pg.jpg" alt="" /></a>
					
				</div>
				<!-- ENd Banner -->
				<div class="register-content-box">
					<h2 class="title30 font-bold text-uppercase text-center">Login</h2>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-ms-12">
							<div class="check-billing">
								<div class="form-my-account">
									<form class="block-login" action="loginaction.php" method="post" name="login">
										<h2 class="title24 title-form-account">Login</h2>
										<p>
											<label>Email address <span class="required">*</span></label>
											<input type="text" name="email" />
										</p>
										<p>
											<label>Password <span class="required">*</span></label>
											<input type="password" name="password" style=" border: 1px solid #e5e5e5; color: #999; height: 40px; padding: 0 20px; width: 100%;" />
										</p>
										<p>

											<input type="submit" class="register-button" name="login" value="Login">
										</p>
										
										<div allign="center" >
										<div class="text-right">
												<a href="mail/index.php" class="color">Lost your password?</a>
											</div>
<?php
if(isset($_GET['error'])){
 $error=$_GET['error'];
echo  "<font color=red size=5>".$error;
}
?>
</div>
										<div class="table create-account">
											<div class="text-left">
												<p>
													<!--<input type="checkbox"  id="remember" /> <label for="remember">Remember me</label>-->
												</p>
											</div>
											<div class="text-right">
												<a href="#" class="color"> </a>
											</div>
										</div>

									 
									</form>
									<form class="block-register">
										
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-ms-12">
							<div class="check-address">
								<div class="form-my-account check-register text-center">
									<h2 class="title24 title-form-account">Register</h2>
									<p class="desc">Registering for   access your account . We will only ask you for information necessary to make the genuinety of the user.</p>
									<a href="registeration.php" class="shop-button bg-color  " data-login="Login" data-register="Register">Register</a>
									<p class="desc title12 silver"><i>  </i></p>
								</div>
							</div>		
						</div>
					</div>
				</div>	
			</div>
	 
		</div>
		<!-- End Content Pages -->
	</div>

	<!-- End Content -->
	<footer id="footer">
		<div class="footer3">
			<div class="newsletter-box bg-color">
				<div class="container">
					 
  						 
						 
					</ul>
				</div>
			</div>
			<!-- End Newsletter -->
			<div class="footer-top3">
				<div class="container">
					<div class="row">
						 
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="footer-box3">
								<h2 class="title30 font-bold">Contact us</h2>
								<p class="desc">Phone 8848182799  </p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<p class="desc more-contact3">For trading registeration is required <a href="#" class="color">contact us</a></p>
						</div>
					</div>
				</div>
			</div>
			<!-- End Footer Top -->
			<div class="footer-bottom3">
				<div class="container">
					<div class="brand-slider brand-slider3">
						<div class="wrap-item" data-pagination="false" data-autoplay="true" data-itemscustom="[[0,2],[480,3],[768,4],[990,5]]">
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="images/samplefruit/Coconut-From-Brazil-Shelf-Life.jpg_.jpg" alt="" /></a>
							</div>
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="images/samplefruit/cranberry-3335937.jpg" alt="" /></a>
							</div>
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="images/samplefruit/Fresh-Fruit-from-BRAZIL.jpg" alt="" /></a>
							</div>
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="images/samplefruit/Fresh-Pineapple.jpg" alt="" /></a>
							</div>
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="images/samplefruit/HIGH-QUALITY-FRESH-MANGO.jpg_300x300.jpg" alt="" /></a>
							</div>
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="images/samplefruit/PREMIUM-FRESH-CAVENDISH-BANANAS.jpg" alt="" /></a>
							</div>
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="images/samplefruit/fresh-Durian-Durian-tropical-fruit.jpg" alt="" /></a>
							</div>
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="images/samplefruit/fresh-sapota.jpg" alt="" /></a>
							</div>
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="images/samplefruit/kumquat.jpg" alt="" /></a>
							</div>
							 
						</div>
					</div>
					<!-- End List Brand -->
					<div class="policy-payment3 border-top">
						 
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	<div class="wishlist-mask">
		<div class="wishlist-popup">
			<span class="popup-icon color"><i class="fa fa-bullhorn" aria-hidden="true"></i></span>
			<p class="wishlist-alert">"Fruit Product" was added to wishlist</p>
			<div class="wishlist-button">
				<a href="#">Continue Shopping (<span class="wishlist-countdown">10</span>)</a>
				<a href="#">Go To Shopping Cart</a>
			</div>
		</div>
	</div>
	<!-- End Wishlist Mask -->
	<a href="#" class="scroll-top round"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_four"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_one"></div>
			</div>
		</div>
	</div>
	<!-- End Preload -->
</div>
<script type="text/javascript" src="js/libs/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/libs/bootstrap.min.js"></script>
<script type="text/javascript" src="js/libs/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/libs/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/libs/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/libs/jquery.jcarousellite.min.js"></script>
<script type="text/javascript" src="js/libs/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="js/libs/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="js/libs/slick.js"></script>
<script type="text/javascript" src="js/libs/popup.js"></script>
<script type="text/javascript" src="js/libs/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="js/libs/timecircles.js"></script>
<script type="text/javascript" src="js/libs/wow.js"></script>
<script type="text/javascript" src="js/theme.js"></script>
</body>
</html>