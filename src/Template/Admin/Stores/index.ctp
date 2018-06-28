<?php $site_url = $this->Url->build('/',true); ?>

<div class="wrapper-md">
  
  <div class="panel panel-default">
    <div class="panel-heading font-bold">
     <div class="row">
      <div class="col-sm-5">
       Stores             
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        
      <a href="<?=$site_url?>admin/stores/add"><button class="btn btn-default pull-right"> <i class="glyphicon glyphicon-plus">Add New</i></button></a>
      
      </div>
    </div>
    </div>
  
  <div class="table-responsive">
      <table  id="data_table" class="table table-striped b-t b-light">
        <thead>
          <tr>
           
          
            <th>Name</th>
            <th>Email</th>
            <th>Opening Hours</th>
            <th>Closing Hours</th>
            <th>Created</th>
            <th style="width:30px;">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
		foreach($Stores as $Store): 
         ?>

          <tr>
            
           
            <td><?=$Store['name']?></td>
            <td><?=$Store['email']?></td>
            <td><?=$Store['opening_hours']?></td>
            <td><?=$Store['closing_hours']?></td>
            <td><?=$Store['created']?></td>
            <td>
             <a href="<?=$site_url?>admin/stores/edit/<?=$Store['id']?>" title="Edit"><i class="fa fa-pencil"></i></a>
              &nbsp;&nbsp;
              <a href="<?=$site_url?>admin/stores/delete/<?=$Store['id']?>" onclick="return confirm('Are you sure you want to delete this item?');" ><i class="fa fa-times text-danger"></i></a>
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

