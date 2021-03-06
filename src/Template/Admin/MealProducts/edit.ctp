<?php

$site_url = $this->Url->build('/',true); ?> 
<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Meal Management</h1>
</div>
<div class="wrapper-md col-sm-11" >

    <div class="panel panel-default">
        <div class="panel-heading font-bold">
            Details
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
             <?php echo $this->Form->file('image_file', ["id"=>"input-upload-img1" , "accept"=>'image/*' , "type" => "file" , "class" => "file" , "data-preview-file-type" => "text"]); ?>

                </div>
            </div>
            <div style=" padding-left: 150px;"><?php if($Ingredient['image'] != ''){?>
                <img src="<?=$site_url?>img/ingredients/<?php echo $Ingredient['image'];?>" alt="img" width="20%" height="20%"/>
               <?php }else{?>
                 <img src="<?=$site_url?>img/ingredients/awaiting.jpg" alt="img" width="20%" height="20%"/>
               <?php }?>&nbsp;</div>

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
