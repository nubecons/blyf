<?php $site_url = $this->Url->build('/',true); ?>




<div class="wrapper-md">
  <div class="panel panel-default">
    <div class="panel-heading font-bold">                  
      Search
    </div>
    <div class="panel-body">
    
        <?php
		echo $this->Form->create('',['class' =>'form-inline']);
		
		 $this->Form->setTemplates([
    		'inputContainer' => '{{content}}',
			 'label' =>false,
			  'class'=>'form-control'
		]);
		?>
      
        <div class="form-group">
          <label class="control-label" for="">Category</label>&nbsp;&nbsp;  &nbsp;&nbsp;
         <?php echo $this->Form->control('blog_category_id',[ 'class'=>'form-control', 'empty' => 'All Categories' , 'options' =>$BlogCategories, ]); ?>
        </div>
        <div class="form-group">
          <label class="control-label" for=""> &nbsp;&nbsp; &nbsp;&nbsp;keyword &nbsp;&nbsp;</label> &nbsp;&nbsp;
          <?php echo $this->Form->control('Keyword',[ 'class'=>'form-control' ,'placeholder' => 'Enter keyword' ])?>
        </div>
      
      
        <span>
          &nbsp;&nbsp;&nbsp;&nbsp;
         
          <button class="btn btn-success" >Search</button>
        </span>
      </form>
    </div>
  </div>
  <div class="panel panel-default">
   <div class="panel-heading font-bold">
     <div class="row">
      <div class="col-sm-5">
        Blog Posts                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        
      <a href="<?=$site_url?>admin/blogs/add"><button class="btn btn-default pull-right"> <i class="glyphicon glyphicon-plus"> </i> Add New</button></a>
      
      </div>
    </div>
    </div>
  
  <div class="table-responsive">
      <table class="table table-striped b-t b-light" id="data_table">
        <thead>
          <tr>
           
            <th>Category</th>
            <th>Title</th>
             <th>Created</th>
            <th>Modified</th>
            <th style="width:30px;">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
		foreach ($Blogs as $key => $Blog):
         ?>

          <tr>
           
           
            <td>
			<?php if(isset($BlogCategories[$Blog['blog_category_id']])){
				echo $BlogCategories[$Blog['blog_category_id']];
				}?></td>
            <td><?=$Blog['title']?></td>
            <td><?=$Blog['created']?></td>
            <td><?=$Blog['modified']?></td>
            <td>
             <a href="<?=$site_url?>admin/blogs/edit/<?=$Blog['id']?>" title="Edit"><i class="fa fa-pencil"></i></a>
              &nbsp;&nbsp;
              <a href="<?=$site_url?>admin/blogs/delete/<?=$Blog['id']?>" onclick="return confirm('Are you sure you want to change the status?');" ><i class="fa fa-times text-danger"></i></a>
            </td>
          </tr>
		  <?php endforeach;  ?>
         
        </tbody>
      </table>
    </div>
    <?php /*?><footer class="panel-footer">
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


