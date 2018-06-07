<h3><?php echo __('Update Category'); ?></h3>
<div class="banners form">
<?php echo $this->Form->create($Category,array('type'=>'file'));?>
	<?php
	   
		echo $this->Form->input('title',array('required' => true,  'style' => 'width:350px'));
		
	?>
<div class="btns">
	  <?php echo $this->Form->submit('Submit', array('div' => false, 'class'=>'small button'));?>
	  <?php echo $this->Html->link('Cancel', array('div' => false, 'action' => "index"),array('class'=>'small button'));?>
  </div>
  <?php  echo $this->Form->end();?>
</div>
