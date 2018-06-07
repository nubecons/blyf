<?php $site_url = $this->Url->build('/',true); ?> 
<h3><?php echo __('Blogs Listing');?></h3>
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
<?php echo $this->Form->create('Blog', array('url' => array( 'action' => 'index')))?>
	<table cellpadding="0" cellspacing="0" class="listing" style="width:96%">
	<tr class="headings">
        <th ><?php echo $this->Paginator->sort('id');?></th>
        <th><?php echo $this->Paginator->sort('Category');?></th>
        <th><?php echo $this->Paginator->sort('title');?></th>
        <th><?php echo $this->Paginator->sort('image');?></th>
        <th><?php echo $this->Paginator->sort('created');?></th>
        <th><?php echo $this->Paginator->sort('modified');?></th>
        <th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($Blogs as $key => $Blog): ?>
	<tr>
		<td><?php echo h($Blog['id']); ?>&nbsp;</td>
        <td><?php echo h($BlogCategories[$Blog['blog_category_id']]); ?>&nbsp;</td>
		<td><?php echo h($Blog['title']); ?>&nbsp;</td>
      
		<td>
		<a class="fancybox" href="<?php echo $site_url ?>img/blog/<?php echo $Blog['image']; ?>">
            View Image
        </a>
            
	    &nbsp;</td>
        
     <?php /*?>   <td>
			<?php 
				echo $this->Form->hidden('Banner.'.$key.'.id', array('value' => $Blog['id']));
			echo $this->Form->text('Banner.'.$key.'.display_order', array('value' => $Blog['display_order'], 'size' => '4','style'=>'border:1px solid #000'));?>
		</td>
        
		<td>
        	
		<?php
			if($Blog['status'] == 1){
				echo $this->Html->image('icons/publish.png', array( "url" => "/admin/banners/publish/".$Blog['id']."/unpublish"));
			}else{
				echo $this->Html->image('icons/unpublish.png', array( "url" => "/admin/banners/publish/".$Blog['id']));
			}	
        ?>

        </td><?php */?>
		<td><?php echo h($Blog['created']); ?>&nbsp;</td>
		<td><?php echo h($Blog['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php // echo $this->Html->link($this->Html->image('admin/view.gif',array('escape'=>false,'style'=>'height:18px; width:18px;','title'=>'View')), array('action' => 'view', $Blog['id']),array('escape'=>false)); ?>
			<?php echo $this->Html->link($this->Html->image('admin/edit.png',array('escape'=>false,'style'=>'height:18px; width:18px;','title'=>'Edit')), array('action' => 'edit', $Blog['id']),array('escape'=>false)); ?>
			<?php //echo $this->Form->postLink($this->Html->image('admin/del.png',array('escape'=>false,'style'=>'height:18px; width:18px;','title'=>'Delete')), array('action' => 'delete', $Blog['id']),array('escape'=>false), null, __('Are you sure you want to delete # %s?', $Blog['id'])); ?>
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
</div>
