<?php $site_url = $this->Url->build('/',true); ?>

<div class="wrapper-md">
  
  <div class="panel panel-default">
    <div class="panel-heading  font-bold">
     <div class="row">
      <div class="col-sm-5">
       Meals             
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        
      <a href="<?=$site_url?>admin/meals/add"><button class="btn btn-default pull-right"> <i class="glyphicon glyphicon-plus"> </i> Add New</button></a>
      
      </div>
    </div>
    </div>
  
  <div class="table-responsive">
      <table class="table table-striped b-t b-light"  id="data_table">
        <thead>
          <tr>
          
          
            <th>Title</th>
            <?php /*?><th>Image</th>
            <th>Status</th><?php */?>
            <th>Created</th>
            <th>Modified</th>
			<th>Dishes</th>
            <th style="width:30px;">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
		foreach($Meals as $Meal): 
         ?>

          <tr>
            
            
            <td><?=$Meal['title']?></td>
           <?php /*?> <td><?=$Meal['image']?></td>
            <td><?=$Meal['status']?></td><?php */?>
            <td><?=$Meal['created']?></td>
            <td><?=$Meal['modified']?></td>
            <td> <a href="<?=$site_url?>admin/meal-products/index/<?=$Meal['id']?>" title="Meal Ingredients" class="text-info">View/Add Dishes</a></td>
            <td>
             <a href="<?=$site_url?>admin/meals/edit/<?=$Meal['id']?>" title="Edit"><i class="fa fa-pencil"></i></a>
              &nbsp;&nbsp;
              <a href="<?=$site_url?>admin/meals/delete/<?=$Meal['id']?>" onclick="return confirm('Are you sure you want to delete this item?');" ><i class="fa fa-times text-danger"></i></a>
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

