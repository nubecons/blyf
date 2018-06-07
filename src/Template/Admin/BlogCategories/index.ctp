<?php $site_url = $this->Url->build('/',true); ?> 
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
</div>
