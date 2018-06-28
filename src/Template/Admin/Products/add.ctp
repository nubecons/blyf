<?php $site_url = $this->Url->build('/',true); ?> 

<div class="wrapper-md col-sm-11" >

  <div class="panel panel-default">
     <div class="panel-heading font-bold">
     <div class="row">
      <div class="col-sm-5">
        Add New Dish           
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        
       <a href="<?=$site_url?>admin/products"><button class="btn btn-default pull-right"> <i class="glyphicon glyphicon-list"></i> Go back to list</button></a>
      
      </div>
    </div>
    </div>
    <div class="panel-body">
    
      <?php echo $this->Form->create($Product, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
      
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Category </label>
          <div class="col-sm-8">
            <?php echo $this->Form->control('main_category_id', [ 'empty' => 'Select Category' ,   'options' => $MainCategories ,   'label' => false,  'class'=>'form-control']); ?>
       
          </div>
        </div>
      
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Title </label>
          <div class="col-sm-8">
            <?php echo $this->Form->control('title', [ 'label' => false, 'class'=>'form-control' ]); ?>
          </div>
        </div>
        
         <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Picture</label>
          <div class="col-sm-8">
             <?php echo $this->Form->control('image_file',[ 'required' => true,'id' =>'flUpload', 'label' =>false,  "accept"=>'image/*' ,'type'=>'file' ]); ?> <br>
              <small> Ideal image dimension: 370px X 230px and Image Size less then : 150KB </small>     
                                  
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Description</label>
          <div class="col-sm-10">
           <?php echo $this->Ck->Create('description' , $Product->description); ?>
           <?php
		     if( $Product->getError('description') ){?>
           <div class="error-message">This field cannot be left empty</div>
           <?php }?>
           
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Fats </label>
          <div class="col-sm-3">
            <?php echo $this->Form->control('fats', [ 'label' => false, 'class'=>'form-control' ]); ?>
          </div>
          <div class="col-sm-2">
           <label> Per Gram</label>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">	Proteins </label>
          <div class="col-sm-3">
            <?php echo $this->Form->control('proteins', [ 'label' => false, 'class'=>'form-control' ]); ?>
          </div>
           <div class="col-sm-2">
           <label> Per Gram</label>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Carbs </label>
          <div class="col-sm-3">
            <?php echo $this->Form->control('carbs', [ 'label' => false, 'class'=>'form-control' ]); ?>
          </div>
           <div class="col-sm-2">
           <label> Per Gram</label>
          </div>
        </div>
         <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Price </label>
          <div class="col-sm-3">
            <?php echo $this->Form->control('price', [ 'label' => false, 'class'=>'form-control' ]); ?>
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
<script>
$(document).ready(function() {
   $("#flUpload").change(function () 
   { 
 
     var iSize = 0;
     if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) 
     {
        var objFSO = new ActiveXObject("Scripting.FileSystemObject");
        var sPath = $("#flUpload")[0].value;
        var objFile = objFSO.getFile(sPath);
        var iSize = objFile.size;
        iSize = iSize/ 1024;
    
	 }else{
    
	    iSize = ($("#flUpload")[0].files[0].size / 1024); 
	 }
	
	 iSize = (Math.round(iSize * 100) / 100);
   
   if(iSize > 150){
	 alert('Image size is greater then 150kb. Please choose smaller image.');
	// $("#flUpload").val(''); 
	}
  }); 
});
</script>
