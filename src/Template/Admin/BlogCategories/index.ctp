<?php /*?><?php $site_url = $this->Url->build('/',true); ?> 
<h3><?php echo __('Categories Listing');?></h3>
<div class="banners index">
<?php if( $this->Paginator->numbers() ){ ?>
<table class="pagination" width="95%">
	<tr>
    	<td width="63%">
	
 </td>
        <td align="right" width="37%">
          <div class="paging">
                             <?php
                               
                                      $this->Paginator->options(['modulus' =>2 , 'url' => ['direction' => null, 'sort' => null]]);
                                    echo $this->Paginator->prev(__('<Last'), array(), null, array('class' => 'prev disabled'));
                                    echo $this->Paginator->numbers(array('modulus' =>4 ));
                                    echo $this->Paginator->next(__('next>') , array(), null, array('class' => 'next disabled'));
                                 
				                ?>				  
          </div>
        </td>
    </tr>
</table>
<?php }?>
<?php echo $this->Form->create('Partner', array('url' => array( 'action' => 'index')))?>
	<table cellpadding="0" cellspacing="0" class="listing" style="width:96%">
	<tr class="headings">
        <th ><?php echo $this->Paginator->sort('id');?></th>
        <th><?php echo $this->Paginator->sort('title');?></th>
        <th><?php echo $this->Paginator->sort('created');?></th>
        <th><?php echo $this->Paginator->sort('modified');?></th>
        <th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($BlogCategories as $key => $Category): ?>
	<tr>
		<td><?php echo h($Category['id']); ?>&nbsp;</td>
        <td><?php echo h($Category['title']); ?>&nbsp;</td>
        <td><?php echo h($Category['created']); ?>&nbsp;</td>
		<td><?php echo h($Category['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image('admin/edit.png',array('escape'=>false,'style'=>'height:18px; width:18px;','title'=>'Edit')), array('action' => 'edit', $Category['id']),array('escape'=>false)); ?>
			<?php //echo $this->Form->postLink($this->Html->image('admin/del.png',array('escape'=>false,'style'=>'height:18px; width:18px;','title'=>'Delete')), array('action' => 'delete', $Category['id']),array('escape'=>false), null, __('Are you sure you want to delete # %s?', $Category['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
    <?php if( $this->Paginator->numbers() ){ ?>
	<table class="pagination" width="95%">
	<tr>
    	<td width="63%">
		
 </td>
        <td align="right" width="37%">
          					<?php
                                      $this->Paginator->options(['modulus' =>2 , 'url' => ['direction' => null, 'sort' => null]]);
                                    echo $this->Paginator->prev(__('<Last'), array(), null, array('class' => 'prev disabled'));
                                    echo $this->Paginator->numbers(array('modulus' =>4 ));
                                    echo $this->Paginator->next(__('next>') , array(), null, array('class' => 'next disabled'));
      		                ?>	
          </div>
        </td>
    </tr>
</table>
    <?php }?> 
   
<?php echo $this->Form->end();?>
</div><?php */?>


<?php $site_url = $this->Url->build('/',true); ?>
<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Blog Categories Management</h1>
</div>
<div class="wrapper-md">
  
  <div class="panel panel-default">
    <div class="panel-heading">
     <div class="row">
      <div class="col-sm-5">
       BlogCategories             
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        
      <a href="<?=$site_url?>admin/blog-categories/add"><button class="btn btn-default pull-right"> <i class="glyphicon glyphicon-plus"> Add New</i></button></a>
      
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
            
            <th>Modified</th>
            <th style="width:30px;">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
		foreach($BlogCategories as $Category): 
         ?>

          <tr>
            <td><?php /*?><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label><?php */?></td>
            <td><?=$Category['id']?></td>
            <td><?=$Category['title']?></td>
            <td><?=$Category['modified']?></td>
            <td>
             <a href="<?=$site_url?>admin/blog-categories/edit/<?=$Category['id']?>" title="Edit"><i class="fa fa-pencil"></i></a>
              &nbsp;&nbsp;
              <a href="<?=$site_url?>admin/blog-categories/delete/<?=$Category['id']?>" onclick="return confirm('Are you sure you want to delete this item?');" ><i class="fa fa-times text-danger"></i></a>
              
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


