<?php $site_url = $this->Url->build('/',true); ?> 
<?php
	 if(!isset($activeTab)){
		$activeTab = '';
		}
?>
  <div class="mrgn-top welcom-txt">
                  	<h1>Welcome Back</h1>
                    </div>

<ul class="nav nav-tabs brdr-btm0" id="myTab" role="tablist">
  <li class="nav-item mrgn-right1">
    <a class="nav-link <?php if($activeTab == 'bio'){?>active<?php }?>"  href="<?=$site_url?>users/dashboard" >My Profile</a>
  </li>
  <li class="nav-item mrgn-right1">
    <a class="nav-link <?php if($activeTab == 'password'){?>active<?php }?>" href="<?=$site_url?>users/change_password" >Password</a>
  </li>
  <li class="nav-item mrgn-right1">
    <a class="nav-link <?php if($activeTab == 'diet'){?>active<?php }?>" id="contact-tab" data-toggle="tab" href="#snacks" role="tab" aria-controls="contact" aria-selected="false">DIETS</a>
  </li>
  <li class="nav-item mrgn-right1">
    <a class="nav-link <?php if($activeTab == 'order_history'){?>active<?php }?>"  data-toggle="tab" href="#allorders" role="tab" aria-controls="contact" aria-selected="false">ORDER HISTORY</a>
  </li>
  <li class="nav-item mrgn-right1">
    <a class="nav-link <?php if($activeTab == 'corders'){?>active<?php }?>"  data-toggle="tab" href="#allorders" role="tab" aria-controls="contact" aria-selected="false">CURRENT ORDERS</a>
  </li>
  
   <li class="nav-item mrgn-right1">
    <a class="nav-link <?php if($activeTab == 'blyf'){?>active<?php }?>" data-toggle="tab" href="#points" role="tab" aria-controls="contact" aria-selected="false">Points</a>
  </li>
  
   <li class="nav-item mrgn-right1">
    <a class="nav-link <?php if($activeTab == 'cards'){?>active<?php }?>" data-toggle="tab" href="#user-cards" role="tab" aria-controls="contact" aria-selected="false">MY CARDS</a>
  </li>
  
</ul>