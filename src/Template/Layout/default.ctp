<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title><?=$SiteInfo['site-title']?></title>
<?= $this->Html->meta('icon') ?>
<?= $this->fetch('meta') ?>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">




<?= $this->Html->css('meanmenu.min.css') ?>
 <?= $this->Html->css('owl.carousel.min.css') ?>
<?= $this->Html->css('css/owl.theme.default.css') ?>
<?= $this->Html->css('bootstrap.min.css') ?>
<?= $this->Html->css('style.css') ?>



<?= $this->fetch('css') ?>


<?php $site_url = $this->Url->build('/',true); ?> 

</head>

<body>
	<div class="header-wrapper">
		<div class="container">
			<div class="header">
				<div class="navigation">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Menu <i class="fa fa-angle-down" aria-hidden="true"></i></a>
							<ul>
								<li><a href="#">Sandwiches</a></li>
								<li><a href="#">Bakery</a></li>
								<li><a href="#">Drinks</a></li>
								<li><a href="#">Meals</a></li>
							</ul>
						</li>
						<li><a href="#">Contact <i class="fa fa-angle-down" aria-hidden="true"></i></a>
							<ul>
								<li><a href="#">Stores</a></li>
								<li><a href="#">Vacancies</a></li>
								<li><a href="#">Contact details</a></li>
							</ul>
						</li>
						<li><a href="#">Over Ons <i class="fa fa-angle-down" aria-hidden="true"></i></a>
							<ul>
								<li><a href="#">Who is BLYF</a></li>
							</ul>
						</li>
					</ul>
					
				</div>
				<!-- mobile-nav -->
				<div class="logo">
					<a href="#"><img src="images/logo-dark.png" alt=""></a>
				</div>
				<div class="right">
					<ul class="signup-sec">
						<li><a href="#" class="header-cta"><span>Order Online</span></a></li>
						<li><a href="#">Login</a></li>
						<li><a href="#">Signup</a></li>
					</ul>
				</div>
				<div class="mobile-nav">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Menu <i class="fa fa-angle-down" aria-hidden="true"></i></a>
							<ul>
								<li><a href="#">Sandwiches</a></li>
								<li><a href="#">Bakery</a></li>
								<li><a href="#">Drinks</a></li>
								<li><a href="#">Meals</a></li>
							</ul>
						</li>
						<li><a href="#">Contact <i class="fa fa-angle-down" aria-hidden="true"></i></a>
							<ul>
								<li><a href="#">Stores</a></li>
								<li><a href="#">Vacancies</a></li>
								<li><a href="#">Contact details</a></li>
							</ul>
						</li>
						<li><a href="#">Over Ons <i class="fa fa-angle-down" aria-hidden="true"></i></a>
							<ul>
								<li><a href="#">Who is BLYF</a></li>
							</ul>
						</li>
						<li><a href="#">Order Online</a></li>
						<li><a href="#">Login</a></li>
						<li><a href="#">Signup</a></li>
					</ul>
				</div>
				<!--end of mobile-nav -->
			</div>
		</div>
	</div>

	<div class="banner">
		<div class="container">
			<div class="content">
				<h1 class="trfm-up">We give you best food<br> in your town</h1>
				<div class="cta-section">
					<a href="#" class="cta-brown cta-transparent">View Menu</a><a href="#" class="cta-brown cta-transparent">Read More</a>
				</div>
			</div>
		</div>
	</div>

	<div class="offers-sec pd-main">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<h2 class="trfm-up">Special week offers</h2>
					<div class="offers-outer">
						<div class="owl-carousel owl-theme">
						    <div class="item">
						    	<div class="offers-inner">
						    		<div class="offers-inr-content1">
						    			<img src="images/hp-img1.jpg" alt="">
						    		</div>
						    		<div class="offers-inr-content2">
						    			<span class="sub-heading">Special 30% Discount</span>
						    			<h2 class="main-heading color-brown">$29<sup class="pwr">99</sup></h2>
						    			<div class="title">
						    				<h4 class="trfm-up">Product name</h4>
						    				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						    			</div>
						    			<a href="#" class="cta-brown order-now">Order Now</a>
						    			<p class="sub-p trfm-up">Discount is valid until May 13th 2018</p>
						    		</div>
						    	</div>
						    </div>
						    <div class="item">
						    	<div class="offers-inner">
						    		<div class="offers-inr-content1">
						    			<img src="images/hp-img1.jpg" alt="">
						    		</div>
						    		<div class="offers-inr-content2">
						    			<span class="sub-heading">Special 30% Discount</span>
						    			<h2 class="main-heading color-brown">$29<sup class="pwr">99</sup></h2>
						    			<div class="title">
						    				<h4>Product name</h4>
						    				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						    			</div>
						    			<a href="#" class="cta-brown order-now">Order Now</a>
						    			<p class="sub-p trfm-up">Discount is valid until May 13th 2018</p>
						    		</div>
						    	</div>
						    </div>
						    <div class="item">
						    	<div class="offers-inner">
						    		<div class="offers-inr-content1">
						    			<img src="images/hp-img1.jpg" alt="">
						    		</div>
						    		<div class="offers-inr-content2">
						    			<span class="sub-heading">Special 30% Discount</span>
						    			<h2 class="main-heading color-brown">$29<sup class="pwr">99</sup></h2>
						    			<div class="title">
						    				<h4>Product name</h4>
						    				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						    			</div>
						    			<a href="#" class="cta-brown order-now">Order Now</a>
						    			<p class="sub-p trfm-up">Discount is valid until May 13th 2018</p>
						    		</div>
						    	</div>
						    </div>
						    <div class="item">
						    	<div class="offers-inner">
						    		<div class="offers-inr-content1">
						    			<img src="images/hp-img1.jpg" alt="">
						    		</div>
						    		<div class="offers-inr-content2">
						    			<span class="sub-heading">Special 30% Discount</span>
						    			<h2 class="main-heading color-brown">$29<sup class="pwr">99</sup></h2>
						    			<div class="title">
						    				<h4>Product name</h4>
						    				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
						    			</div>
						    			<a href="#" class="cta-brown order-now">Order Now</a>
						    			<p class="sub-p trfm-up">Discount is valid until May 13th 2018</p>
						    		</div>
						    	</div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="featured-products bg-grey">
		<div class="container">
			<h2 class="trfm-up">featured product</h2>
			<a href="#" class="cta-brown2">View all Items <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
			<div class="products-outer mt-25">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="products-inner">
							<img src="images/hp-img2.jpg" alt="">
							<div class="products-inr-title bg-white">
								<h4 class="trfm-up">Product name <span class="color-brown">$15</span></h4>
								<p class="trfm-up color-light-gray sub-p">Strawberry, kiwi, apple</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="products-inner">
							<img src="images/hp-img3.jpg" alt="">
							<div class="products-inr-title bg-white">
								<h4 class="trfm-up">Product name <span class="color-brown">$17</span></h4>
								<p class="trfm-up color-light-gray sub-p">Strawberry, kiwi, apple</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="products-inner">
							<img src="images/hp-img4.jpg" alt="">
							<div class="products-inr-title bg-white">
								<h4 class="trfm-up">Product name <span class="color-brown">$10</span></h4>
								<p class="trfm-up color-light-gray sub-p">Strawberry, kiwi, apple</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="products-inner">
							<img src="images/hp-img5.jpg" alt="">
							<div class="products-inr-title bg-white">
								<h4 class="trfm-up">Product name <span class="color-brown">$25</span></h4>
								<p class="trfm-up color-light-gray sub-p">Strawberry, kiwi, apple</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="products-inner">
							<img src="images/hp-img6.jpg" alt="">
							<div class="products-inr-title bg-white">
								<h4 class="trfm-up">Product name <span class="color-brown">$35</span></h4>
								<p class="trfm-up color-light-gray sub-p">Strawberry, kiwi, apple</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="products-inner">
							<img src="images/hp-img7.jpg" alt="">
							<div class="products-inr-title bg-white">
								<h4 class="trfm-up">Product name <span class="color-brown">$42</span></h4>
								<p class="trfm-up color-light-gray sub-p">Strawberry, kiwi, apple</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="news">
		<div class="container">
			<h2 class="trfm-up">News</h2>
			<a href="#" class="cta-brown2">View all News <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
			<div class="news-outer mt-25">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="news-inner bg-white">
							<span>May 09 2018</span>
							<h4>Top Quality Food</h4>
							<img src="images/hp-img8.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="news-inner bg-white">
							<span>May 09 2018</span>
							<h4>Top Quality Food</h4>
							<img src="images/hp-img9.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="news-inner bg-white">
							<span>May 09 2018</span>
							<h4>Top Restaurant</h4>
							<img src="images/hp-img10.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="news-inner bg-white">
							<span>May 09 2018</span>
							<h4>Top Quality Food</h4>
							<img src="images/hp-img11.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="news-inner bg-white">
							<span>May 09 2018</span>
							<h4>Top Quality Food</h4>
							<img src="images/hp-img12.jpg" alt="">
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="news-inner bg-white">
							<span>May 09 2018</span>
							<h4>Top Quality Food</h4>
							<img src="images/hp-img13.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="careers bg-grey pd-main">
		<div class="container">
			<h2 class="trfm-up">Careers</h2>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.</p>
			<div class="careers-outer">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="careers-inner">
							<h6>Assistant Manager</h6>
							<a href="#" class="cta-brown cta-transparent2">Apply Now</a>
						</div>
						<div class="careers-inner">
							<h6>Delivery Driver</h6>
							<a href="#" class="cta-brown cta-transparent2">Apply Now</a>
						</div>
						<div class="careers-inner">
							<h6>Restaurant General Manager</h6>
							<a href="#" class="cta-brown cta-transparent2">Apply Now</a>
						</div>
						<div class="careers-inner">
							<h6>Team Member</h6>
							<a href="#" class="cta-brown cta-transparent2">Apply Now</a>
						</div>
						<div class="careers-inner">
							<h6>Hourly Shift Coordinator</h6>
							<a href="#" class="cta-brown cta-transparent2">Apply Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer bg-brown">
		<div class="container">
			<div class="footer-outer">
				<div class="row">
					<div class="col-xl-2 col-md-4 col-sm-6">
						<div class="footer-items">
							<h5>menu</h5>
							<ul class="links">
								<li><a href="#">Sandwiches</a></li>
								<li><a href="#">Bakery</a></li>
								<li><a href="#">Drinks</a></li>
								<li><a href="#">Meals</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-md-4 col-sm-6">
						<div class="footer-items">
							<h5>Contact</h5>
							<ul class="links">
								<li><a href="#">Stores</a></li>
								<li><a href="#">Vacancies</a></li>
								<li><a href="#">Contact details</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-md-4 col-sm-6">
						<div class="footer-items">
							<h5>Order Online</h5>
							<ul class="links">
								<li><a href="#">Login</a></li>
								<li><a href="#">Sign Up</a></li>
								<li><a href="#">Pick up</a></li>
								<li><a href="#">Delivery</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-md-4 col-sm-6">
						<div class="footer-items">
							<h5>Over Ons</h5>
							<a href="#" class="over-ons">Who is BLYF</a>
						</div>
					</div>
					<div class="col-xl-2 col-md-4 col-sm-6">
						<div class="footer-items">
							<h5>Contact Info</h5>
							<ul class="links links2">
								<li>
									<span>Phone</span>
									<a href="#">088 - 123 4567</a>
								</li>
								<li>
									<span>Email</span>
									<a href="#">order@blyf.nl</a>
								</li>
								<li>
									<p class="sub-p color-white">2 Lake Road, Longmeadow, Modderfontein NL</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-md-4 col-sm-6">
						<div class="footer-items">
							<h5>Follow Us On</h5>
							<ul class="icons">
								<li><a href="#" class="social-icon"><i class="fa fa-facebook" aria-hidden="true"></i>
								</a></li>
								<li><a href="#" class="social-icon"><i class="fa fa-linkedin" aria-hidden="true"></i>
								</a></li>
								<li><a href="#" class="social-icon"><i class="fa fa-behance" aria-hidden="true"></i>
								</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright-sec color-light-brown">
				© 2018 BLYF. All Rights Reserved.
			</div>
		</div>
	</div>
    
<?= $this->Html->script('jquery.js') ?>
<?= $this->Html->script('owl.carousel.min.js') ?>
<?= $this->Html->script('jquery.meanmenu.min.js') ?>
<?= $this->Html->script('custom_scripts.js') ?>
<?= $this->Html->script('wow.min.js') ?>
<?= $this->Html->script('bootstrap.min.js') ?>
<?= $this->Html->script('isotope.pkgd.min.js') ?>
<?= $this->fetch('script') ?>
	<script>
		$(document).ready(function(){
			function add_header_sticky(){
			    if ($(window).scrollTop() >= 100) {
			        $('body').addClass('sticky-header');
			    }
			    else {
			        $('body').removeClass('sticky-header');
			    }
			}
			$(window).scroll(add_header_sticky);
			add_header_sticky();

			$(".mobile-nav").meanmenu();

		 	$('.owl-carousel').owlCarousel({
			    loop:true,
			    margin:10,
			    nav:false,
			    smartSpeed:500,
			    mouseDrag:false,
			    responsive:{
			        0:{
			            items:1
			        },
			        600:{
			            items:1
			        },
			        1000:{
			            items:1
			        }
			    }
			});
		});
 	</script>
</body>
</html>