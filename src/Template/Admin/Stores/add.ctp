<?php $site_url = $this->Url->build('/',true); ?> 

<div class="wrapper-md col-sm-11" >

  <div class="panel panel-default">
    <div class="panel-heading font-bold">
      Details
    </div>
    <div class="panel-body">
    
      <?php echo $this->Form->create($Store, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
       
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Name </label>
          <div class="col-sm-5">
            <?php echo $this->Form->input('name', ['label'=>false, 'class'=>'form-control' ]); ?>
          </div>
        </div>
        
         <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Email</label>
          <div class="col-sm-5">
            <?php echo $this->Form->input('email', ['label'=>false, 'class'=>'form-control']); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Address </label>
          <div class="col-sm-5">
            <?php echo $this->Form->input('address', ['label'=>false,'class'=>'form-control' ]); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Opening Hours </label>
          <div class="col-sm-5">
            <?php echo $this->Form->input('opening_hours', ['label'=>false,'id'=>"opening_time", 'class'=>"form-control timepicker"]); ?>
          </div>
        </div>
                <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Closing Hours </label>
          <div class="col-sm-5">
            <?php echo $this->Form->input('closing_hours', ['label'=>false,'class'=>'form-control' ]); ?>
          </div>
        </div>

        
        <div>
        
  
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <div class="col-sm-4 col-sm-offset-2">
           
            <button type="submit" class="btn btn-primary"> Save </button>
          </div>
        </div>
       <?php echo $this->Form->end()?>
    </div>
  </div>
</div>

