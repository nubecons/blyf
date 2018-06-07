<?php echo $this->Html->script('ckeditor/ckeditor'); ?>
<?php echo $this->Html->script('ckeditor/ck_settings'); ?>
        
<h3><?php echo __('Update Blog'); ?></h3>
<div class="banners form">
<?php echo $this->Form->create($Blog,array('type'=>'file'));?>
	<?php
		
		echo $this->Form->input('blog_category_id',array('options' => $BlogCategories , 'style' => 'width:350px'));
		echo $this->Form->input('title',array('style' => 'width:350px'));
		echo $this->Form->input('image_file',array('type'=>'file'));
		echo "<br>";
		
		
		echo $this->Ck->Create('post');
		
		echo "<br>";
		
		//echo $this->Form->input('status' , ['style' => 'width:350px', 'options' =>['ACTIVE' => 'ACTIVE' ,'INACTIVE' => 'INACTIVE'] ]);
	?>
<div class="btns">
	  <?php echo $this->Form->submit('Submit', array('div' => false, 'class'=>'small button'));?>
	  <?php echo $this->Html->link('Cancel', array('div' => false, 'action' => "index"),array('class'=>'small button'));?>
  </div>
  <?php  echo $this->Form->end();?>
</div>
