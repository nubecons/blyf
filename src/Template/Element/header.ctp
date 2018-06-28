<?php $site_url = $this->Url->build('/',true); ?> 

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="login-regis">
          <h5 class="modal-title" id="loginModalLabel">Log in</h5>
          <div class="form-group ful-frm">
                <label for="recipient-name" class="col-form-label contrl-label">Email</label>
				<input name="email" maxlength="255" type="text" class="form-control" value="">          
                </div>
             <div class="form-group ful-frm">
                <label for="recipient-name" class="col-form-label contrl-label">Password</label>
				<input name="email" maxlength="255" type="text" class="form-control" value="">
                </div>    
           <div class="frm-btn input-btn">
             <button type="button" class="cta-brown order-now button" data-dismiss="modal">Submit</button>
           </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="login-regis">
          <h5 class="modal-title" id="signUpModalLabel">Sign Up</h5>
          <div class="form-group ful-frm">
                <label for="recipient-name" class="col-form-label contrl-label">Email</label>
				<input name="email" maxlength="255" type="text" class="form-control" value="">          
                </div>
             <div class="form-group ful-frm">
                <label for="recipient-name" class="col-form-label contrl-label">Password</label>
				<input name="email" maxlength="255" type="text" class="form-control" value="">
                </div>    
           <div class="frm-btn input-btn">
             <button type="button" class="cta-brown order-now button" data-dismiss="modal">Submit</button>
           </div>
        </div>
      </div>
    </div>
  </div>
</div>
	
    <header id="header">
	  <div class="header-wrapper">
		<div class="container">
			<div class="header">
				<div class="navigation">
					<ul>
						<li><a href="<?=$site_url?>">Home</a></li>
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
								<li><a href="<?=$site_url?>about">Who is BLYF</a></li>
							</ul>
						</li>
					</ul>
					
				</div>
				<!-- mobile-nav -->
				<div class="logo">
					<a href="<?=$site_url?>"><img src="<?=$site_url?>images/logo-dark.png" alt=""></a>
				</div>
				<div class="right">
					<ul class="signup-sec">
						<li><a href="#" class="header-cta"><span>Order Online</span></a></li>
						<?php if($sUser){ ?>	
                       
						<li><a href="<?=$site_url?>users/dashboard">Profile</a></li>
                        <li><a href="<?=$site_url?>users/logout">Logout</a></li>
                        <?php }else{ ?>
						<li><a href="<?=$site_url?>users/login" <?php /*?>data-toggle="modal" data-target="#loginModal"<?php */?>>Login</a></li>
                        <li><a href="<?=$site_url?>users/signup" <?php /*?>data-toggle="modal" data-target="#signUpModal"<?php */?>>Signup</a></li>
                        <?php }?>
					
                    </ul>
				</div>
				<div class="mobile-nav">
					<ul>
						<li><a href="<?=$site_url?>">Home</a></li>
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
								<li><a href="<?=$site_url?>about">Who is BLYF</a></li>
							</ul>
						</li>
						<li><a href="#">Order Online</a></li>
                        <?php if($sUser){ ?>	
							<li><a href="<?=$site_url?>users/dashboard">Profile</a></li>
                             <li><a href="<?=$site_url?>users/logout">Logout</a></li>
                        <?php }else{ ?>
                        	<li><a href="<?=$site_url?>users/login" <?php /*?>data-toggle="modal" data-target="#loginModal"<?php */?>>Login</a></li>
                        	<li><a href="<?=$site_url?>users/signup" <?php /*?>data-toggle="modal" data-target="#signUpModal"<?php */?>>Signup</a></li>
                        <?php }?>
					</ul>
				</div>
				<!--end of mobile-nav -->
			</div>
		</div>
	</div>
	</header>