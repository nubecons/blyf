<?php $site_url = $this->Url->build('/',true); ?> 

<div class="wrapper-md col-sm-11" >

  <div class="panel panel-default">
   <div class="panel-heading font-bold">
     <div class="row">
      <div class="col-sm-5">
       Update Dish           
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
            <?php echo $this->Form->control('main_category_id', ['required' => true,'onChange' =>'get_categories()',  'empty' => 'Select Category' ,   'options' => $MainCategories ,   'label' => false,  'class'=>'form-control']); ?>
       
          </div>
        </div>
        
          <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Sub Category </label>
          <div class="col-sm-8" id="sub_cat_div">
            <?php echo $this->Form->control('category_id', [ 'required' => true,'empty' => 'Select Category' ,   'options' => $Categories ,   'label' => false,  'class'=>'form-control']); ?>
       
          </div>
        </div>
      
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Title </label>
          <div class="col-sm-8">
            <?php echo $this->Form->control('title', [ 'required' => true,'label' => false, 'class'=>'form-control' ]); ?>
          </div>
        </div>
        
         <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Picture</label>
          <div class="col-sm-8">
             <?php echo $this->Form->control('image_file',['id' =>'flUpload', 'label' =>false,  "accept"=>'image/*' ,'type'=>'file' ]); ?> <br>
              <small> Ideal image dimension: 370px X 230px and Image Size less then : 150KB </small>     
                                  
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Description</label>
          <div class="col-sm-8">
           <?php echo $this->Form->control('description', [ 'required' => true,'label' => false, 'class'=>'form-control' ]); ?>
           <?php //echo $this->Ck->Create('description' , $Product->description); ?>
           <?php
		     if( $Product->getError('description') ){?>
           <div class="error-message">This field can not be left empty</div>
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
            <?php echo $this->Form->control('price', [ 'required' => true,'label' => false, 'class'=>'form-control' ]); ?>
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
function get_categories(){
     
        var main_category_id = $('#main-category-id').val();
        $.ajax({
            type: "POST",
            url: "<?php echo $site_url?>admin/products/get_categories/" + main_category_id,
                    success: function (data) {
                        if (data != '')
                        {
                            $('#sub_cat_div').html(data);
                        }
                    }
        });
    }
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