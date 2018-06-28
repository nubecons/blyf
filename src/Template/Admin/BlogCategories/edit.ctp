<?php $site_url = $this->Url->build('/',true); ?>


<div class="wrapper-md col-sm-10" >

  <div class="panel panel-default">
   <div class="panel-heading font-bold">
     <div class="row">
      <div class="col-sm-5">
        Update Blog Category             
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        
      <a href="<?=$site_url?>admin/blog-categories"><button class="btn btn-default pull-right">  <i class="glyphicon glyphicon-list"></i> Go back to list</button></a>
      
      </div>
    </div>
    </div>
    <div class="panel-body">
    
      <?php echo $this->Form->create($Category, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
       
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Title </label>
          <div class="col-sm-5">
            <?php echo $this->Form->control('title', ['label'=>false, 'class'=>'form-control' ]); ?>
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

