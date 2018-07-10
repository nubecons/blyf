<?php $site_url = $this->Url->build('/',true); ?> 

<section style="margin-bottom:50px; margin-top:30px;">
<div class="container">

<div class="col-md-3 float-left" >

</div>

<div class="col-md-6 float-left" >

<div class="custom-box">
  <h2 class="color-brown text-center">Login</h2>
	<?= $this->Form->create('',["class" => "form-horizontal"] ) ?>
    	<?= $this->Flash->render() ?>
    
     <div class="form-group">
         <label for="sender-email" class="control-label col-sm-3"></label>
         <div class="col-sm-11">
          <?= $this->Form->control('email' ,[  'type'=>'email','required' => true,  'div'=>false, 'label'=>false, "id" => "sender-email" ,  "class" => "form-control" , "placeholder"=>"Email"]) ?>
        </div>
     </div>
   
   <div class="form-group">
        <label for="user-pass" class="control-label col-sm-3"></label>
        <div class="col-sm-11">
        <?= $this->Form->password('password' ,[  'required' => true, "id" => "user-passl" ,  "class" => "form-control" , "placeholder"=>"Password"]) ?>
        </div>
    </div>
    <br>
    <div class="row text-center">
       <div class="col-sm-4" style="padding-left:30px;">
        <button type="submit" class="cta-brown order-now button">Login</button>
        </div>
       <div class="col-sm-7 text-right" style="padding-right:30px;">
         <a href="<?=$site_url?>users/forgot_password">Forgot Password?</a>
        </div>
        
    </div>
    <?= $this->Form->end() ?>
</div> 
<br>
<div class="col-sm-7" style="padding-right:30px;">
         <a href="<?=$site_url?>users/signup">New User? Sign Up here.</a>
        </div>
</div>

                     
</div>

<div class="clearfix"></div> 

</section>

<?=$this->element('footer');?>