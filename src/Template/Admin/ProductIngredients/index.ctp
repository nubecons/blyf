<?php $site_url = $this->Url->build('/',true); ?>

<div class="wrapper-md">
  <div>
  <a href="<?=$site_url?>admin/products" class="text-info" > All Dishes </a> -> <?=$Product->title?>'s Ingredients
  </div>
  <div class="panel panel-default">
    <div class="panel-heading font-bold">
     <div class="row">
      <div class="col-sm-5">
      <?=$Product->title?>'s Ingredients             
      </div>
      <div class="col-sm-2">
      </div>
      <div class="col-sm-3">
       
     <a href="<?=$site_url?>admin/product-ingredients/add/<?=$Product->id?>"><button class="btn btn-default pull-right"> <i class="glyphicon glyphicon-plus"></i> Select & Add Ingredient</button></a>
     </div>
      <div class="col-sm-2">   
      <a href="<?=$site_url?>admin/products"><button class="btn btn-default pull-right"> <i class="glyphicon glyphicon-list"></i> Go back to dishes</button></a>
      
      
      </div>
    </div>
    </div>
  
  <div class="table-responsive">
      <table class="table table-striped b-t b-light"  id="data_table">
        <thead>
          <tr>
          
           
            <th>Ingredient</th>
            <th>Modified</th>
            <th style="width:30px;">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
		foreach($ProductIngredients as $Ingredient): 
         ?>

          <tr>
            
         
            <td><?=$Ingredients[$Ingredient['ingredient_id']]?></td>
            <td><?=$Ingredient['modified']?></td>
            <td>
              <a href="<?=$site_url?>admin/product-ingredients/delete/<?=$Ingredient['id']?>" onclick="return confirm('Are you sure you want to delete this item?');" ><i class="fa fa-times text-danger"></i></a>
            </td>
          </tr>
		  <?php endforeach;  ?>
         
        </tbody>
      </table>
    </div>
   <?php /*?> <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-4 hidden-xs">
                           
        </div>
        <div class="col-sm-4 text-center">
          <small class="text-muted inline m-t-sm m-b-sm"></small>
        </div>
        <div class="col-sm-4 text-right text-center-xs">  
        <?php if( $this->Paginator->numbers() ){ ?>               
          <ul class="pagination pagination-sm m-t-none m-b-none">
         <?php
			  $this->Paginator->options(['modulus' =>2 , 'url' => ['direction' => null, 'sort' => null]]);
			echo $this->Paginator->first(__('First'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('modulus' =>4 ));
			echo $this->Paginator->last(__('Last') , array(), null, array('class' => 'next disabled'));
            ?>	
                      
          </ul>
          <?php }?>   
        </div>
      </div>
    </footer><?php */?>
  </div>
</div>




