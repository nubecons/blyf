<?php $site_url = $this->Url->build('/',true); ?> 
<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Meals Management</h1>
</div>
<div class="wrapper-md col-sm-11" >

  <div class="panel panel-default">
    <div class="panel-heading font-bold">
     Add New Meal
    </div>
    <div class="panel-body">
    
      <?php echo $this->Form->create($Meal, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
      
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Title </label>
          <div class="col-sm-5">
            <?php echo $this->Form->input('title', [ 'label' => false, 'class'=>'form-control' ]); ?>
          </div>
        </div>
        
         <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Picture</label>
          <div class="col-sm-5">
             <?php echo $this->Form->input('image_file', [ 'label' => false, "id"=>"input-upload-img1" , "accept"=>'image/*' , "type" => "file" , "class" => "file" , "data-preview-file-type" => "text"]); ?>
                                  
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Description</label>
          <div class="col-sm-10">
           <?php echo $this->Ck->Create('description' , $Meal->description); ?>
           <?php
		     if( $Meal->getError('description') ){?>
           <div class="error-message">This field cannot be left empty</div>
           <?php }?>
           
          </div>
        </div>
        
       
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

