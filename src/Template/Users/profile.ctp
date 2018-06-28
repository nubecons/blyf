<?php $site_url = $this->Url->build('/',true); ?> 
<div class="container text-center">

<div class="col-md-3 float-left" >

</div>

<div class="col-md-6 float-left" >

<div class="custom-box">
  <h2 class="color-brown">Signup</h2>
	  <?php echo $this->Form->create($user, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
    	<?= $this->Flash->render() ?>
    <div class="row">
        <label for="sender-email" class="control-label col-sm-3">Email:</label>
         <div class="col-sm-9">
        <div class="input-icon">
        <?= $this->Form->control('email' ,[ 'label'=>false, "id" => "sender-email" ,  "class" => "form-control" , "placeholder"=>"Email"]) ?>
        </div>
        </div>
    </div>
    <br>
    <div class="row">
        <label for="user-pass" class="control-label col-sm-3">Password:</label>
     <div class="col-sm-9">
        <div class="input-icon"><i class="icon-lock fa"></i>
        <?= $this->Form->password('password' ,[  "id" => "user-passl" ,  "class" => "form-control" , "placeholder"=>"Password"]) ?>
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
