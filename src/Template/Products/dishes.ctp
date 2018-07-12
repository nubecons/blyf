<?php $site_url = $this->Url->build('/',true); ?> 
      
      
    <section id="Order Page Section">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4 pdng-right0">
                  <div class="pro-box">
                	<div class="pro-box-heading">
                    	<h2>Proteins</h2>
                    </div>
                    <div class="fixedheightcontainer" id="item-scrol">
                    <?php
					foreach($Protiens as $Product){?>
                    <div class="pro-list">
                      <div class="item-img">
                      <img src="<?=$site_url?>img/Products/<?php echo $Product['image'];?>" alt="<?=$Product['title']?>" />
                    	
                       <?php /*?> <i class="info-circle fa fa-info"></i><?php */?>
                      </div>
                      <div class="item-heading">
                      	<h3><?=$Product['title']?></h3>
                      </div>
                    </div>
                    <?php }?>
                    
                 
                  
                  
                    </div>
                  </div>
                </div>
                <div class="col-md-4 pdng-right0">
                  <div class="pro-box">
                	<div class="pro-box-heading">
                    	<h2>Sides - We recommend at least 1 base</h2>
                    </div>
                    
                    
                    <div class="fixedheightcontainer" id="item-scrol">
                    <?php
					foreach($Sides as $Product){?>
                    <div class="pro-list">
                      <div class="item-img">
                      <img src="<?=$site_url?>img/Products/<?php echo $Product['image'];?>" alt="<?=$Product['title']?>" />
                    	
                       <?php /*?> <i class="info-circle fa fa-info"></i><?php */?>
                      </div>
                      <div class="item-heading">
                      	<h3><?=$Product['title']?></h3>
                      </div>
                    </div>
                    <?php }?>
                   
                  
                    </div>
                  </div>
                </div>
                
                 <div class="col-md-4 pdng-right0">
                  <div class="pro-box">
                	<div class="pro-box-heading">
                    	<h2>Sauces</h2>
                    </div>
                    
                    
                    <div class="fixedheightcontainer" id="item-scrol">
                       <?php
					foreach($Sauces as $Product){?>
                    <div class="pro-list">
                      <div class="item-img">
                      <img src="<?=$site_url?>img/Products/<?php echo $Product['image'];?>" alt="<?=$Product['title']?>" />
                    	
                       <?php /*?> <i class="info-circle fa fa-info"></i><?php */?>
                      </div>
                      <div class="item-heading">
                      	<h3><?=$Product['title']?></h3>
                      </div>
                    </div>
                    <?php }?>
                    </div>
                  </div>
                </div>
              
            </div>
        </div>
    </section>
    
	<section class="btnsection-fixed">
    	<div class="container">
        	<div class="row">
            	<div class="col-sm-6">
                	<div class="box-btn pull-left">
                            <a href="#" class="cta-brown order-now button">Back</a>
                        </div>
                    </div>
                <div class="col-sm-6">
                	<div class="pull-right box-btn">
                        	<span class="prictxt-tag">£7.42</span>
                            <a href="#" class="cta-brown order-now button brdr-rads">Checkout</a>
                        </div>
                    </div>
                    </div>
                    </div>
    </section>
    