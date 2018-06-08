<?php $site_url = $this->Url->build('/',true); ?>
<!--<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">CMS</h1>
</div>-->
<div class="wrapper-md">
  
  <div class="panel panel-default">
    <div class="panel-heading">
     <div class="row">
      <div class="col-sm-5">
       Categories             
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        
      <a href="<?=$site_url?>admin/allergens/add"><button class="btn btn-default pull-right"> <i class="glyphicon glyphicon-plus">Add New</i></button></a>
      
      </div>
    </div>
    </div>
  
  <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
             <?php /*?> <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label><?php */?>
            </th>
            <th>Id</th>
            <th>Title</th>
            <th>image</th>
            <th>Status</th>
            <th>Modified</th>
            <th style="width:30px;">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
		foreach($Allergens as $Allergy): 
         ?>

          <tr>
            <td><?php /*?><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label><?php */?></td>
            <td><?=$Allergy['id']?></td>
            <?php if($Allergy['parent_id']==0){?>
            <td><?php echo $this->Html->link(__($Allergy['title']), array($Allergy['id'])); ?></td>
            <?php }else{?>
            <td><?=$Allergy['title']?></td>
            <?php }?>
            <td><?=$Allergy['description']?></td>
            <td><?=$Allergy['status']?></td>
            <td><?=$Allergy['modified']?></td>
            <td>
             <a href="<?=$site_url?>admin/allergens/edit/<?=$Allergy['id']?>" title="Edit"><i class="fa fa-pencil"></i></a>
              &nbsp;&nbsp;
              <a href="<?=$site_url?>admin/allergens/delete/<?=$Allergy['id']?>" onclick="return confirm('Are you sure you want to delete this item?');" ><i class="fa fa-times text-danger"></i></a>
            </td>
          </tr>
		  <?php endforeach;  ?>
         
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
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
    </footer>
  </div>
</div>
