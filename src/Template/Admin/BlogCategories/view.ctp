<h3><?php  echo __('Banners View');?></h3>
<div class="banners view">
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($banner['Banner']['id']); ?>
			&nbsp;
		</dd>
		
        	<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($banner['Banner']['title']); ?>
			&nbsp;
		</dd>
        
        	<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($banner['Banner']['url']); ?>
			&nbsp;
		</dd>
        
        
		<dt><?php echo __('Banner Image'); ?></dt>
		<dd>
			<?php echo h($banner['Banner']['image']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($banner['Banner']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($banner['Banner']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($banner['Banner']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<nav class="actions">
	<ul class="view-list">
		<li><?php echo $this->Html->link(__('Edit Banner'), array('action' => 'edit', $banner['Banner']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Banner'), array('action' => 'delete', $banner['Banner']['id']), null, __('Are you sure you want to delete # %s?', $banner['Banner']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Banners'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banner'), array('action' => 'add')); ?> </li>
	
	</ul>
</nav>
