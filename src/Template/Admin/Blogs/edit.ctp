<?php $site_url = $this->Url->build('/',true); ?> 
<?php echo $this->Html->script('../admin/ckeditor/ckeditor'); ?>
<?php echo $this->Html->script('../admin/ckeditor/ck_settings'); ?>

<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Blog Management</h1>
</div>

<div class="wrapper-md col-sm-11" >

  <div class="panel panel-default">
    <div class="panel-heading font-bold">
      Update Post
    </div>
    <div class="panel-body">
    
      <?php echo $this->Form->create($Blog, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
       
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Category </label>
          <div class="col-sm-5">
            <?php echo $this->Form->input('blog_category_id',[ 'label' =>false, 'class'=>'form-control', 'empty' => 'Select Category' , 'options' => $BlogCategories , 'style' => 'width:350px']); ?>
          </div>
        </div>
           <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Title </label>
          <div class="col-sm-5">
            <?php echo $this->Form->input('title', [ 'label' =>false,'class'=>'form-control' ]); ?>
          </div>
        </div>
        
        
         <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Image</label>
          <div class="col-sm-5">
            <?php echo $this->Form->input('image_file',[ 'label' =>false,  "accept"=>'image/*' ,'type'=>'file' ]); ?>
          </div>
        </div>
        
         <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Post</label>
          <div class="col-sm-10">
           <?php echo $this->Ck->Create('post' , $Blog->post); ?>
           <?php
		     if( $Blog->errors('post') ){?>
           <div class="error-message">This field cannot be left empty</div>
           <?php }?>
           
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
