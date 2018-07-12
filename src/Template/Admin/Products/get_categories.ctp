<?php $site_url = $this->Url->build('/',true); ?> 
      
<?php echo $this->Form->control('category_id', [ 'required' => true,'empty' => 'Select Category' ,   'options' => $Categories ,   'label' => false,  'class'=>'form-control']); ?>