<?php $site_url = $this->Url->build('/',true); ?> 

<div class="wrapper-md col-sm-11" >
 <a href="<?=$site_url?>admin/products" class="text-info" > All Dishes </a>&nbsp;&nbsp; ->&nbsp;&nbsp; <a href="<?=$site_url?>admin/product-ingredients/index/<?=$Product['id']?>"  class="text-info" > <?=$Product->title?> </a>&nbsp;&nbsp; ->&nbsp;&nbsp; Select ingredient 
  <div class="panel panel-default">
   <div class="panel-heading font-bold">
     <div class="row">
      <div class="col-sm-5">
         Select & add ingredient           
      </div>
      <div class="col-sm-2">
      </div>
       <div class="col-sm-3">
       
 <button  data-toggle="modal" data-target="#AddIngredient" class="btn btn-default pull-right"> <i class="glyphicon glyphicon-plus"></i> Create New Ingredient</button>
     </div>
      <div class="col-sm-2">   
      <a href="<?=$site_url?>admin/product-ingredients/index/<?=$Product['id']?>"><button class="btn btn-default pull-right"> <i class="glyphicon glyphicon-list"></i> Go back to list</button></a>
      
      </div>
    </div>
    </div>
  
   
    <div class="panel-body">
    
      <?php echo $this->Form->create($ProductIngredient, ["class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Ingredient </label>
          <div class="col-sm-5">
            <?php echo $this->Form->control('ingredient_id', [ 'required' =>true, 'empty' =>'Select Ingredient', 'label' => false, 'options'=>$Ingredients ,  'class'=>'form-control' ]); ?>
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

<div id="AddIngredient" class="modal fade" role="dialog">
    <div class="modal-dialog" >

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create Ingredient</h4>
            </div>
            <div class="modal-body">
               
    
      <?php echo $this->Form->create('', ['id' => 'form_AddIng', 'url' =>'#',  "class" => "form-horizontal" , 'enctype' => 'multipart/form-data']); ?> 
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Title </label>
          <div class="col-sm-7">
            <?php echo $this->Form->control('title', ["required" =>true,'empty' =>'Select Ingredient', 'label'=>false,'class'=>'form-control' ]); ?>
          </div>
        </div>
        
         <div class="form-group">
          <label class="col-sm-2 control-label" for="input-id-1">Picture</label>
          <div class="col-sm-7">
             <?php echo $this->Form->control('image_file', ["required" =>true, "id"=>"flUpload" , "accept"=>'image/*' ,'label'=>false, "type" => "file" , "class" => "file" ]); ?>
                <br> <small> Ideal image dimension: 100px X 100px and Image Size less then : 100KB </small>                   
          </div>
        </div>
       
        <div class="line line-dashed b-b line-lg pull-in"></div>
        <div class="form-group">
          <div class="col-sm-4 col-sm-offset-2">
           <button type="button"  class="btn btn-sm btn-warning btnload btn_loader"  style="display:none" ><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Working...</button>
           <button type="submit" class="btn btn-sm btn-primary btn_submit" >Submit</button>
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
    $('#form_AddIng').on('submit',(function(e) {
        e.preventDefault();
		
            if ($('#form_AddIng [name=title]').val() == '')
            {
                alert('Pleae enter title');
                return;
            }
            if ($('#form_AddIng [name=image_file]').val() == '')
            {
                alert('Pleae select image');
                return;
            }
			
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: '<?=$site_url?>admin/Ingredients/saveData',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
			beforeSend: function () {
                    $('#form_AddIng .btn_submit').hide();
                    $('#form_AddIng .btn_loader').show();
                },
            success:function(data){
              
                    if (data != 'true')
                    {
                        $('#form_AddIng .btn_submit').show();
                        $('#form_AddIng .btn_loader').hide();
                        alert(data);
                    } else {
						
                        $('#AddIngredient').modal('hide');
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