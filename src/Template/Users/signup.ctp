<?php $site_url = $this->Url->build('/',true); ?> 

<section  class="bg-grey" style="margin-top:120px">

  <div class="container">

<div class="col-md-3 float-left" >

</div>

<div class="col-md-6 float-left" >

<div class="custom-box">
  <h2 class="color-brown  text-center">Signup</h2>
	  <?php echo $this->Form->create($user, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
    	<?= $this->Flash->render() ?>
    <div class="row">
        <label for="sender-email" class="control-label col-sm-3">First Name:</label>
         <div class="col-sm-9">
        <div class="input-icon">
        <?= $this->Form->control('first_name' ,[ 'label'=>false,  "class" => "form-control" , "placeholder"=>"First Name"]) ?>
        </div>
        </div>
    </div>
    <br>
     <div class="row">
        <label for="sender-email" class="control-label col-sm-3">Last Name:</label>
         <div class="col-sm-9">
        <div class="input-icon">
        <?= $this->Form->control('last_name' ,[ 'label'=>false, "class" => "form-control" , "placeholder"=>"Last Name"]) ?>
        </div>
        </div>
    </div>
    <br>
    
     <div class="row">
        <label for="sender-email" class="control-label col-sm-3">Email:</label>
         <div class="col-sm-9">
        <div class="input-icon">
        <?= $this->Form->control('email' ,[ 'label'=>false,  "class" => "form-control" , "placeholder"=>"Email"]) ?>
        </div>
        </div>
    </div>
    <br>
     <div class="row">
        <label for="sender-email" class="control-label col-sm-3">Password:</label>
         <div class="col-sm-9">
        <div class="input-icon">
         <?= $this->Form->control('new_password' ,[ 'label'=>false, 'type' =>'password', "class" => "form-control" , "placeholder"=>"Password"]) ?>
        </div>
        </div>
    </div>
    <br>
    <div class="row">
        <label for="user-pass" class="control-label col-sm-3">Confirm Password:</label>
     <div class="col-sm-9">
        <div class="input-icon"><i class="icon-lock fa"></i>
        <?= $this->Form->control('confirm_password' ,[  'label'=>false, 'type' =>'password',  "class" => "form-control" , "placeholder"=>"Password"]) ?>
        </div>
        </div>
    </div>
    <br>
    <div class="row text-center">
       <label for="" class="control-label col-sm-3"></label>
       <div class="col-sm-4">
        <button type="submit" class="cta-brown order-now button">Signup</button>
        </div>
        <div class="col-sm-6">
         
        </div>
        
    </div>
    <?= $this->Form->end() ?>
    </div> 
   </div>
</div>

</section>

<?=$this->element('footer');?>