<?php $site_url = $this->Url->build('/',true); ?> 

<section style="margin-bottom:50px; margin-top:30px;">
<div class="container">

<div class="col-md-3 float-left" >

</div>

<div class="col-md-6 float-left" >

<div class="custom-box">
  <h2 class="color-brown text-center">New Password</h2>
	<?= $this->Form->create($user,["class" => "form-horizontal"] ) ?>
    	<?= $this->Flash->render() ?>
    
     <div class="form-group">
         <label for="sender-email" class="control-label col-sm-3">New Password:</label>
         <div class="col-sm-11">
         <?php echo $this->Form->control('new_password', ['minlength' =>6,'class'=>'form-control' ,'required' => true,'label'=>false,'div'=>false,'type'=>'password']); ?>
        </div>
     </div>
    <br>
   <div class="form-group">
        <label for="user-pass" class="control-label col-sm-4">Confirm Password:</label>
        <div class="col-sm-11">
        <?php echo $this->Form->control('confirm_password', ['minlength' =>6,'class'=>'form-control' ,'required' => true,'label'=>false,'div'=>false,'type'=>'password']); ?>
        </div>
    </div>
    <br>
    <div class="row text-center">
       <div class="col-sm-4" style="padding-left:30px;">
        <button type="submit" class="cta-brown order-now button">Submit</button>
        </div>
       <div class="col-sm-7 text-right" style="padding-right:30px;">
      
        </div>
        
    </div>
    <?= $this->Form->end() ?>
</div> 

</div>

                     
</div>

<div class="clearfix"></div> 

</section>

<?=$this->element('footer');?>