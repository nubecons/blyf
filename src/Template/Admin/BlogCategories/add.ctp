<h3><?php echo __('Add New Category'); ?></h3>
<div class="banners form">
<?php echo $this->Form->create('',array('type'=>'file'));?>
	<?php
	  
		echo $this->Form->input('title',array('required' => true,  'style' => 'width:350px'));
		
		//echo $this->Form->input('status' , ['style' => 'width:350px', 'options' =>['ACTIVE' => 'ACTIVE' ,'INACTIVE' => 'INACTIVE'] ]);
	?>
<div class="btns">
	  <?php echo $this->Form->submit('Submit', array('div' => false, 'class'=>'small button'));?>
	  <?php echo $this->Html->link('Cancel', array('div' => false, 'action' => "index"),array('class'=>'small button'));?>
  </div>
  <?php  echo $this->Form->end();?>
</div>
