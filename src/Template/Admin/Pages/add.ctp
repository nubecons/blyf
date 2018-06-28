<?php $site_url = $this->Url->build('/',true); ?> 
<?php echo $this->Html->script('../admin/ckeditor/ckeditor'); ?>
<?php echo $this->Html->script('../admin/ckeditor/ck_settings'); ?>

<div class="wrapper-md col-sm-11" >
  <div class="panel panel-default">
     <div class="panel-heading font-bold">
     <div class="row">
      <div class="col-sm-5">
        Add New Page            
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
      <a href="<?=$site_url?>admin/pages"><button class="btn btn-default pull-right"> <i class="glyphicon glyphicon-list"></i> Go back to list</button></a>
      </div>
    </div>
    </div>
    <div class="panel-body">
    
      <?php echo $this->Form->create($Page, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
       
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Headline </label>
          <div class="col-sm-5">
            <?php echo $this->Form->control('headline', ['label'=>false, 'class'=>'form-control' ]); ?>
          </div>
        </div>
        
         <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Url</label>
          <div class="col-sm-5">
            <?php echo $this->Form->control('url', ['label'=>false,'class'=>'form-control']); ?>
          </div>
        </div>
        
         <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Body</label>
          <div class="col-sm-10">
           <?php echo $this->Ck->Create('body' , $Page->body); ?>
           <?php
		     if( $Page->getError('body') ){?>
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
