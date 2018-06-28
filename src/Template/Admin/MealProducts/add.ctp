<?php $site_url = $this->Url->build('/',true); ?> 

<div class="wrapper-md col-sm-11" >
 <a href="<?=$site_url?>admin/meals" class="text-info" > All Ready Meals </a>&nbsp;&nbsp; -> &nbsp;&nbsp; <a href="<?=$site_url?>admin/meal-products/index/<?=$Meal['id']?>" class="text-info" ><?=$Meal->title?></a>&nbsp;&nbsp;->&nbsp;&nbsp;  Select dish
  <div class="panel panel-default">
 
     <div class="panel-heading font-bold">
     <div class="row">
      <div class="col-sm-5">
      Select & Add dish to meal           
      </div>
      <div class="col-sm-2">
      </div>
      <div class="col-sm-3">
        <button  data-toggle="modal" data-target="#AddPro" class="btn btn-default pull-right"> <i class="glyphicon glyphicon-plus"></i> Create New Dish</button>
     </div>
      <div class="col-sm-2"> 
        
     <a href="<?=$site_url?>admin/meal-products/index/<?=$Meal['id']?>"><button class="btn btn-default pull-right"> <i class="glyphicon glyphicon-list"></i> Go back to list</button></a>
      
      </div>
    </div>
    </div>
    
    <div class="panel-body">
    
      <?php echo $this->Form->create($MealProduct, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Dish </label>
          <div class="col-sm-5">
            <?php echo $this->Form->control('product_id', [ 'label' => false,  'empty' => 'Select Dish' , 'options'=>$Products ,  'class'=>'form-control' ]); ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Quantity </label>
          <div class="col-sm-3">
            <?php echo $this->Form->control('quantity', [ 'label' => false,  'class'=>'form-control' ]); ?>
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


<div id="AddPro" class="modal fade" role="dialog">
    <div class="modal-dialog" >

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create New Dish</h4>
            </div>
            
            <div class="modal-body">
    
    	  <?php echo $this->Form->create('', ['id' => 'form_AddPro', "class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
      
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Category </label>
          <div class="col-sm-5">
            <?php echo $this->Form->control('main_category_id', ["required" =>true,  'empty' => 'Select Category' ,   'options' => $MainCategories ,   'label' => false,  'class'=>'form-control']); ?>
       
          </div>
        </div>
      
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Title </label>
          <div class="col-sm-5">
            <?php echo $this->Form->control('title', ["required" =>true, 'label' => false, 'class'=>'form-control' ]); ?>
          </div>
        </div>
        
         <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Picture</label>
          <div class="col-sm-5">
             <?php echo $this->Form->control('image_file',[ 'required' => true,'id' =>'flUpload', 'label' =>false,  "accept"=>'image/*' ,'type'=>'file' ]); ?> <br>
              <small> Ideal image dimension: 370px X 230px and Image Size less then : 150KB </small>     
                                  
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Description</label>
          <div class="col-sm-10">
           <?php echo $this->Form->control('description', [ 'label' => false, 'class'=>'form-control' ]); ?>
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
            <?php echo $this->Form->control('price', ["required" =>true, 'label' => false, 'class'=>'form-control' ]); ?>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<script>

$(document).ready(function (e) {
    $('#form_AddPro').on('submit',(function(e) {
        e.preventDefault();
		
            if ($('#form_AddPro [name=title]').val() == '')
            {
                alert('Pleae enter title');
                return;
            }
            if ($('#form_AddPro [name=image_file]').val() == '')
            {
                alert('Pleae select image');
                return;
            }
			
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: '<?=$site_url?>admin/products/saveData',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
			beforeSend: function () {
                    $('#form_AddPro .btn_submit').hide();
                    $('#form_AddPro .btn_loader').show();
                },
            success:function(data){
              
                    if (data != 'true')
                    {
                        $('#form_AddPro .btn_submit').show();
                        $('#form_AddPro .btn_loader').hide();
                        alert(data);
                    } else {
						
                        $('#AddPro').modal('hide');
                         location.reload();

                    }
					
					return false;
            },
            error: function(data){
                return false;
            }
        });
    }));

 
});
</script>