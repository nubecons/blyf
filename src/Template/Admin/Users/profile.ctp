<?php $site_url = $this->Url->build('/',true); ?> 
<div class="wrapper-md col-sm-7" >
  
  
  <div class="panel panel-default">
    <div class="panel-heading font-bold">
      Personal Details
    </div>
    <div class="panel-body">
      
      <?php echo $this->Form->create($user, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
       
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">First Name</label>
          <div class="col-sm-10">
            <?php echo $this->Form->text('first_name', ['class'=>'form-control' ,'required' => true]); ?>
          </div>
        </div>
        
         <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Last Name</label>
          <div class="col-sm-10">
            <?php echo $this->Form->text('last_name', ['class'=>'form-control' ,'required' => true]); ?>
          </div>
        </div>
        
         <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Email</label>
          <div class="col-sm-10">
            <?php echo $this->Form->text('email', ['class'=>'form-control' ,'required' => true]); ?>
          </div>
        </div>
  
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <div class="col-sm-4 col-sm-offset-2">
           
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
       <?php echo $this->Form->end()?>
    </div>
  </div>
</div>
