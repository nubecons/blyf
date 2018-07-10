<?php $site_url = $this->Url->build('/',true); ?> 

  <section   style="margin-bottom:50px;">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                  <div class="mrgn-btm25 mrgn-top">
                  
                	<?=$this->element('dashboard_header', ['activeTab' => 'password']);?>
                    
						<div class="tab-content bckgrnd-white" id="myTabContent">

 <h3 class="color-brown">Change Password</h3>
    <br>
  <div class="tab-pane fade show active" id="bio" role="tabpanel" aria-labelledby="home-tab">
  
    <div class="container">

 <div class="col-md-5">
    <?php echo $this->Form->create($user, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?>
   
    	
        
            <div class="form-group">
            <label class="control-label">Existing Password</label>
            <?php echo $this->Form->control('old_password', ['class'=>'form-control' ,'required' => true,'label'=>false,'div'=>false,'type'=>'password']); ?>
            </div>
          
           
            <div class="form-group">
            <label class="control-label font-size14">New Password</label>
            <?php echo $this->Form->control('new_password', ['minlength' =>6,'class'=>'form-control' ,'required' => true,'label'=>false,'div'=>false,'type'=>'password']); ?>
            </div>
           
           
          
            <div class="form-group">
            <label class="control-label font-size14">Re-type Password</label>
            <?php echo $this->Form->control('confirm_password', ['minlength' =>6,'class'=>'form-control' ,'required' => true,'label'=>false,'div'=>false,'type'=>'password']); ?>
            </div>
         
         <br>
        <div class="form-group">
            <label class="control-label font-size14"></label>
    		<button class="cta-brown order-now button" type="submit">Save Changes</button>
         </div>
         <?= $this->Form->end() ?>
    
		</div>
    </div>
 
  </div>
  <?=$this->element('dashboard_body');?>
</div>
					</div>
                </div>
            </div>
        </div>
    </section>
	
    <?=$this->element('footer');?>