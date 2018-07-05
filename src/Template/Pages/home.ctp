<?php echo $this->Html->css('owl.carousel.min.css',['block'=>true]) ?>
<?php echo $this->Html->script('owl.carousel.min.js',['block'=>true]) ?>
<?php $site_url = $this->Url->build('/',true); ?> 
 
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
			<h2 class="trfm-up">Ready Meals</h2>
			<?php /*?><a href="#" class="cta-brown2">View all Items <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a><?php */?>
			<div class="products-outer mt-25">
				<div class="row">
                <?php
				 foreach($Meals as $Meal){?>
					<div class="col-lg-4 col-md-6">
						<div class="products-inner">
							<img src="<?=$site_url?>images/hp-img2.jpg" alt="">
							<div class="products-inr-title bg-white">
								<h4 class="trfm-up"><?=$Meal->title?> <span class="color-brown">$<?= number_format($this->GetInfo->getMealPrice($Meal->id) , 2);?></span></h4>
								<?php /*?><p class="trfm-up color-light-gray sub-p">Strawberry, kiwi, apple</p><?php */?>
                               
                                <br style="clear:both">
                                <p>
                                <a href="<?=$site_url?>products/customize/<?=$Meal->id?>" >
                                <button class="cta-brown  button" style="min-width:25px; padding:5px">Customize</button>
                                </a>
                                 <a href="<?=$site_url?>products/snacks/<?=$Meal->id?>" >
                                <button class="cta-brown  button pull-right" style="min-width:25px; padding:5px">Checkout</button>
                                </a>
                               </p>
							</div>
						</div>
					</div>
                    
                    <?php } ?>
                    
           
					<?php /*?><div class="col-lg-4 col-md-6">
						<div class="products-inner">
							<img src="images/hp-img7.jpg" alt="">
							<div class="products-inr-title bg-white">
								<h4 class="trfm-up">Product name <span class="color-brown">$42</span></h4>
								<p class="trfm-up color-light-gray sub-p">Strawberry, kiwi, apple</p>
							</div>
						</div>
					</div><?php */?>
				</div>
			</div>
		</div>
	</div>
<?php /*?>
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
<?php */?>

     <script>
		$(document).ready(function(){
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
    
    
	<?=$this->element('footer');?>