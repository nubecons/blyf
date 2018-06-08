<?php $site_url = $this->Url->build('/',true); ?> 
<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Products Management</h1>
</div>
<div class="wrapper-md col-sm-11" >

  <div class="panel panel-default">
    <div class="panel-heading font-bold">
     Update Product
    </div>
    <div class="panel-body">
    
      <?php echo $this->Form->create($Product, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
      
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Category </label>
          <div class="col-sm-5">
            <?php echo $this->Form->input('main_category_id', [ 'empty' => 'Main Category' ,   'options' => $MainCategories ,   'label' => false,  'class'=>'form-control']); ?>
       
          </div>
        </div>
      
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
           <label class="col-sm-2 control-label" for="input-id-1"></label>
              <div class="col-sm-5"><?php if($Product['image'] != ''){?>
                <img src="<?=$site_url?>img/Products/<?php echo $Product['image'];?>" alt="img" style="max-height:150px; max-width:150px"/>
               <?php }else{?>
                 <img src="<?=$site_url?>img/awaiting-image.jpg" alt="img" style="max-height:150px; max-width:150px"/>
               <?php }?>&nbsp;</div>

            </div>
        
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Description</label>
          <div class="col-sm-10">
           <?php echo $this->Ck->Create('description' , $Product->description); ?>
           <?php
		     if( $Product->errors('description') ){?>
           <div class="error-message">This field cannot be left empty</div>
           <?php }?>
           
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Fats </label>
          <div class="col-sm-3">
            <?php echo $this->Form->input('fats', [ 'label' => false, 'class'=>'form-control' ]); ?>
          </div>
          <div class="col-sm-2">
           <label> Per Gram</label>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">	Proteins </label>
          <div class="col-sm-3">
            <?php echo $this->Form->input('proteins', [ 'label' => false, 'class'=>'form-control' ]); ?>
          </div>
           <div class="col-sm-2">
           <label> Per Gram</label>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Carbs </label>
          <div class="col-sm-3">
            <?php echo $this->Form->input('carbs', [ 'label' => false, 'class'=>'form-control' ]); ?>
          </div>
           <div class="col-sm-2">
           <label> Per Gram</label>
          </div>
        </div>
         <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Price </label>
          <div class="col-sm-3">
            <?php echo $this->Form->input('price', [ 'label' => false, 'class'=>'form-control' ]); ?>
          </div>
           <div class="col-sm-2">
           <label> Per Gram</label>
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

