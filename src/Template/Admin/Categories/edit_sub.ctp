<?php $site_url = $this->Url->build('/',true); ?> 

<div class="wrapper-md col-sm-11" >

  <div class="panel panel-default">
    <div class="panel-heading font-bold">
     <div class="row">
      <div class="col-sm-5">
        Update Food Sub Category           
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        
      <a href="<?=$site_url?>admin/categories/sub"><button class="btn btn-default pull-right"> <i class="glyphicon glyphicon-list"></i> Go back to list</button></a>
      
      </div>
    </div>
    </div>
    <div class="panel-body">
    
      <?php echo $this->Form->create($Category, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
         <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1"> Category </label>
          <div class="col-sm-5">
            <?php echo $this->Form->control('parent_id', ['required' => true,  'empty' => 'Select Category' ,   'options' => $MainCategories ,  'dev' => false , 'label' => false, 'class'=>'form-control']); ?>
       
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Title </label>
          <div class="col-sm-5">
            <?php echo $this->Form->control('title', ['label' => false, 'class'=>'form-control' ]); ?>
          </div>
        </div>
        
         <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Description</label>
          <div class="col-sm-5">
            <?php echo $this->Form->control('description', ['label' => false,'class'=>'form-control']); ?>
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
