<?php $site_url = $this->Url->build('/',true); ?> 
<?php
	 if(!isset($activeTab)){
		$activeTab = '';
		}
?>

<ul class="nav nav-tabs brdr-btm0" id="myTab" role="tablist">
  <li class="nav-item mrgn-right1">
    <a class="nav-link <?php if($activeTab == 'bio'){?>active<?php }?>" id="home-tab" data-toggle="tab" href="#bio" role="tab" aria-controls="home" aria-selected="true">BIODATA</a>
  </li>
  <li class="nav-item mrgn-right1">
    <a class="nav-link <?php if($activeTab == 'profile'){?>active<?php }?>" id="profile-tab" data-toggle="tab" href="#meals" role="tab" aria-controls="profile" aria-selected="false">PROFILE</a>
  </li>
  <li class="nav-item mrgn-right1">
    <a class="nav-link <?php if($activeTab == 'diet'){?>active<?php }?>" id="contact-tab" data-toggle="tab" href="#snacks" role="tab" aria-controls="contact" aria-selected="false">DIETS</a>
  </li>
  <li class="nav-item mrgn-right1">
    <a class="nav-link <?php if($activeTab == 'order_history'){?>active<?php }?>" id="contact-tab" data-toggle="tab" href="#drinks" role="tab" aria-controls="contact" aria-selected="false">ORDER HISTORY</a>
  </li>
  <li class="nav-item mrgn-right1">
    <a class="nav-link <?php if($activeTab == 'corders'){?>active<?php }?>" id="contact-tab" data-toggle="tab" href="#coffee" role="tab" aria-controls="contact" aria-selected="false">CURRENT ORDERS</a>
  </li>
  
   <li class="nav-item mrgn-right1">
    <a class="nav-link <?php if($activeTab == 'blyf'){?>active<?php }?>" id="contact-tab" data-toggle="tab" href="#coffee1" role="tab" aria-controls="contact" aria-selected="false">MOJOS</a>
  </li>
  
   <li class="nav-item mrgn-right1">
    <a class="nav-link <?php if($activeTab == 'cards'){?>active<?php }?>" id="contact-tab" data-toggle="tab" href="#coffee2" role="tab" aria-controls="contact" aria-selected="false">MY CARDS</a>
  </li>
  
</ul>