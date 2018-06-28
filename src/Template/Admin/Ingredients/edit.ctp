<?php

$site_url = $this->Url->build('/',true); ?> 

<div class="wrapper-md col-sm-11" >

    <div class="panel panel-default">
     <div class="panel-heading font-bold">
     <div class="row">
      <div class="col-sm-5">
       Update Ingredient             
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        
      <a href="<?=$site_url?>admin/ingredients"><button class="btn btn-default pull-right"> <i class="glyphicon glyphicon-list"></i> Go back to list</button></a>
      
      </div>
    </div>
    </div>
    
     
        <div class="panel-body">

      <?php echo $this->Form->create($Ingredient, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
            <div class="form-group">
                <label class="col-sm-2 control-label" for="input-id-1">Title </label>
                <div class="col-sm-5">
            <?php echo $this->Form->control('title', ['label'=>false,'class'=>'form-control' ]); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="input-id-1">Picture</label>
                <div class="col-sm-5">
             <?php echo $this->Form->file('image_file', [ "id"=>"flUpload" , "accept"=>'image/*' , "type" => "file" , "class" => "file" , "data-preview-file-type" => "text"]); ?>
               <br> <small> Ideal image dimension: 100px X 100px and Image Size less then : 100KB </small>
                </div>
            </div>
           <div class="form-group">
                <label class="col-sm-2 control-label" for="input-id-1"></label>
                <div class="col-sm-5"><?php if($Ingredient['image'] != ''){?>
                <img src="<?=$site_url?>img/Ingredients/<?php echo $Ingredient['image'];?>" alt="img"  style="max-height:150px; max-width:150px"/>
               <?php }else{?>
                 <img src="<?=$site_url?>img/awaiting-image.jpg" alt="img" style="max-height:150px; max-width:150px"/>
               <?php }?>&nbsp;</div>

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
   
   if(iSize > 100){
	 alert('Image size is greater then 100kb. Please choose smaller image.');
	// $("#flUpload").val(''); 
	}
  }); 
});
</script>