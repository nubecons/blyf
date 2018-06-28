<?php $site_url = $this->Url->build('/',true); ?>

<div class="wrapper-md">
  
  <div class="panel panel-default">
    <div class="panel-heading font-bold">
     <div class="row">
      <div class="col-sm-5">
       Food Categories             
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
      <a href="<?=$site_url?>admin/categories/add"><button class="btn btn-default pull-right"> <i class="glyphicon glyphicon-plus"> </i> Add New</button></a>
      </div>
    </div>
    </div>
  
  <div class="table-responsive">
      <table class="table table-striped b-t b-light"  id="data_table">
        <thead>
          <tr>
          
           
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Modified</th>
            <th style="width:30px;">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
		foreach($Categories as $Category): 
         ?>

          <tr>
            
           
         
            <td><?=$Category['title']?></td>
            <td><?=$Category['description']?></td>
            <td><?=$Category['status']?></td>
            <td><?=$Category['modified']?></td>
            <td>
             <a href="<?=$site_url?>admin/categories/edit/<?=$Category['id']?>" title="Edit"><i class="fa fa-pencil"></i></a>
              &nbsp;&nbsp;
             
              <?php
			  if($Category['status'] == 'ACTIVE'){
				  $activeClass = 'glyphicon-ok text-success';
				  $activetext = "Click to de-activate";
			     }else{
				  $activeClass = 'glyphicon-ban-circle text-danger'; 
				  $activetext = "Click to activate";
				  }?>
              
              <a href="<?=$site_url?>admin/categories/changestatus/<?=$Category['id']?>" title="<?=$activetext?>"  onclick="return confirm('Are you sure you want to change the status?');" ><i class="glyphicon <?=$activeClass?> "></i></a>
              <?php /*?><a href="<?=$site_url?>admin/categories/delete/<?=$Category['id']?>" onclick="return confirm('Are you sure you want to delete this item?');" ><i class="fa fa-times text-danger"></i></a><?php */?>
            </td>
          </tr>
		  <?php endforeach;  ?>
         
        </tbody>
      </table>
    </div>
  <?php /*?>  <footer class="panel-footer">
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

