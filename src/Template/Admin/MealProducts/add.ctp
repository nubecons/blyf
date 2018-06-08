<?php $site_url = $this->Url->build('/',true); ?> 

<div class="wrapper-md col-sm-11" >

  <div class="panel panel-default">
    <div class="panel-heading font-bold">
      Details
    </div>
    <div class="panel-body">
    
      <?php echo $this->Form->create($MealProduct, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Products </label>
          <div class="col-sm-5">
            <?php echo $this->Form->input('product_id', [ 'label' => false, 'options'=>$Products ,  'class'=>'form-control' ]); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Quantity </label>
          <div class="col-sm-3">
            <?php echo $this->Form->input('quantity', [ 'label' => false,  'class'=>'form-control' ]); ?>
          </div>
           <div class="col-sm-3">
           In Grams
           </div>
        </div>
        
         <div class="form-group">
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

