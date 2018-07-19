<?php $site_url = $this->Url->build('/',true); ?>

<div class="wrapper-md">
  <div class="panel panel-default">
    <div class="panel-heading font-bold">
     <div class="row">
      <div class="col-sm-5">
       Dishes             
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
      		<a href="<?=$site_url?>admin/products/add"><button class="btn btn-default pull-right"> <i class="glyphicon glyphicon-plus">Add New</i></button></a>
      </div>
    </div>
    </div>
  
  <div class="table-responsive">
      <table class="table table-striped b-t b-light"  id="data_table">
        <thead>
          <tr>
          
            <th>Category</th>
          
            <th>Title</th>
            <th>Image</th>
            <?php /*?><th>Status</th><?php */?>
            <th>Created</th>
            <th>Modified</th>
			<th>Ingredients</th>
            <th style="width:30px;">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
		foreach($Products as $Product): 
         ?>

          <tr>
         
    
            <td><?php echo isset($Categories[$Product['category_id']])?$Categories[$Product['category_id']]:'';?></td>
            <td><?=$Product['title']?></td>
            <td><?php if($Product['image'] != ''){?>
                <img src="<?=$site_url?>img/Products/<?php echo $Product['image'];?>" alt="img"  style="max-height:50px; max-width:50px"/>
            <?php }?>
            </td>
            <?php /*?> <td><?=$Product['status']?></td><?php */?>
            <td><?=$Product['created']?></td>
            <td><?=$Product['modified']?></td>
            <td> <a class="text-info" href="<?=$site_url?>admin/product-ingredients/index/<?=$Product['id']?>" title="Product Ingredients">View/Add Ingredients</a></td>
            <td>
             <a href="<?=$site_url?>admin/products/edit/<?=$Product['id']?>" title="Edit"><i class="fa fa-pencil"></i></a>
              &nbsp;&nbsp;
              <a href="<?=$site_url?>admin/products/delete/<?=$Product['id']?>" onclick="return confirm('Are you sure you want to delete this item?');" ><i class="fa fa-times text-danger"></i></a>
            </td>
          </tr>
		  <?php endforeach;  ?>
         
        </tbody>
      </table>
    </div>
    <?php /*?><footer class="panel-footer">
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

