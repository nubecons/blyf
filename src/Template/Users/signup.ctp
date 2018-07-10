<?php $site_url = $this->Url->build('/',true); ?> 

<section style="margin-bottom:50px; margin-top:30px;">

  <div class="container">

<div class="col-md-4 float-left" >

</div>

<div class="col-md-5 float-left" >

<div class="custom-box">
  <h2 class="color-brown  text-center">Sign Up</h2>
  <br>
	  <?php echo $this->Form->create($user, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
    	<?= $this->Flash->render() ?>
    <div class="row">
       <?php /*?> <label for="sender-email" class="control-label col-sm-3">First Name:</label><?php */?>
         <div class="col-sm-12">
        <div class="input-icon">
        <?= $this->Form->control('first_name' ,[ 'required' => true, 'label'=>false,  "class" => "form-control" , "placeholder"=>"First Name"]) ?>
        </div>
        </div>
    </div>
    <br>
     <div class="row">
        <?php /*?><label for="sender-email" class="control-label col-sm-3">Last Name:</label><?php */?>
         <div class="col-sm-12">
        <div class="input-icon">
        <?= $this->Form->control('last_name' ,['required' => true,  'label'=>false, "class" => "form-control" , "placeholder"=>"Last Name"]) ?>
        </div>
        </div>
    </div>
    <br>
    
     <div class="row">
       <?php /*?> <label for="sender-email" class="control-label col-sm-3">Email:</label><?php */?>
         <div class="col-sm-12">
        <div class="input-icon">
        <?= $this->Form->control('email' ,['required' => true,  'label'=>false,  "class" => "form-control" , "placeholder"=>"Email"]) ?>
        </div>
        </div>
    </div>
    <br>
     <div class="row">
        <?php /*?><label for="sender-email" class="control-label col-sm-3">Password:</label><?php */?>
         <div class="col-sm-12">
        <div class="input-icon">
         <?= $this->Form->control('new_password' ,[ 'minlength' =>6, 'required' => true,  'label'=>false, 'type' =>'password', "class" => "form-control" , "placeholder"=>"Password"]) ?>
        </div>
        </div>
    </div>
    <br>
    <div class="row">
       <?php /*?> <label for="user-pass" class="control-label col-sm-3">Confirm Password:</label><?php */?>
     <div class="col-sm-12">
        <div class="input-icon">
        <?= $this->Form->control('confirm_password' ,[ 'minlength' =>6, 'required' => true,  'label'=>false, 'type' =>'password',  "class" => "form-control" , "placeholder"=>"Password"]) ?>
        </div>
        </div>
    </div>
    <br>
    <div class="row">
      
       <div class="col-sm-3">
       
        <button type="submit" class="cta-brown order-now button">Sign Up</button>
        </div>
        <div class="col-sm-9 text-right">
         <a href="<?=$site_url?>users/login">Already have an account? Login here</a>
        </div>
        
    </div>
    <br>
    <?= $this->Form->end() ?>
    </div> 
   </div>
</div>
<div class="clearfix"></div> 
</section>

<?=$this->element('footer');?>