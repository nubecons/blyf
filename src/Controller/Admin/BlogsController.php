<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;

use App\View\Helper\CkHelper;

class BlogsController extends AppController {

    public function initialize() {
        parent::initialize();
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->file_path = WWW_ROOT . 'img' . DS . 'Blogs' . DS;
        $this->loadComponent('Upload');
    }

   

    public function index() {
		
	    $this->loadModel('BlogCategories');
	    $BlogCategories = $this->BlogCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => 0])->toArray();
        $this->set('BlogCategories', $BlogCategories);
		
		
		$conditions = [] ;
		if ($this->request->is('post')) {

            $this->Session->delete('SrchBlogData');
            $this->Session->delete('SrchBlogCond');

            $data = $this->request->getData();
            $this->Session->write('SrchBlogData', $data);

            if (isset($data['Keyword']) && $data['Keyword'] != '') {
                $conditions['OR'] = ['Blogs.title Like' => '%'.$data['keyword'].'%' , 'Blogs.post Like' => '%'.$data['Keyword'].'%' ];
            }


            if (isset($data['blog_category_id']) && $data['blog_category_id'] != '') {
                $conditions['Blogs.blog_category_id'] = $data['blog_category_id'];
            }

          
          

            $this->Session->write('SrchBlogCond', $conditions);
        }

       

        if ($this->Session->check('SrchBlogCond')) {
            $conditions = $this->Session->read('SrchBlogCond');
        }
      
		
		
		//debug($conditions);
		
		$query = $this->Blogs->find('all')->where($conditions);
        $this->paginate['limit'] = 25;
        $this->paginate['order'] = ['id' => 'DESC', ];
        $Blogs = $this->paginate($query, array('url' => '/Blogs/'));
        $this->set('Blogs', $Blogs);
        
    
    }

 
    public function add(){
	
	  $this->set('title', 'Add Blog');
	  $this->loadModel('BlogCategories');
	  $BlogCategories = $this->BlogCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => 0])->toArray();
      $this->set('BlogCategories', $BlogCategories);
	  
	
	  $Blog = $this->Blogs->newEntity();
	  $this->set('Blog', $Blog);
	  if ($this->request->is('post'))
		{
			
            $data = $this->request->getData();
			$Blog= $this->Blogs->patchEntity($Blog, $data); 
            $this->set('Blog', $Blog);
				
			if (!empty($data['image_file']['name']))
			{
				
				if(($data['image_file']['size']/1024) > 800){
					$this->Flash->error(__('Image size is greater then 800kb. Please choose smaller image.'));	
					return;
					}
				
				$result = $this->Upload->upload($data['image_file'], $this->file_path, null,  array('type' => 'resize', 'size' => '1000', 'output' => 'png') ,null);
				
				if(count($this->Upload->errors) > 0)
				{
					unset($data['image_file']);
					$this->Flash->error(__($this->Upload->errors[0]));	
					return;
				}
				else
				{
					$data['image'] = $this->Upload->result; 
					$data['image_name'] = $data['image_file']['name']; 
					
				}
				
				$result = $this->Upload->upload($data['image_file'], $this->file_path.'thumbnails/', null,  array('type' => 'resize', 'size' => '300', 'output' => 'png') ,null);
				
				if(count($this->Upload->errors) > 0)
				{
					$this->Flash->error(__($this->Upload->errors[0]));	
					return;
				}
				else
				{
					$data['thumbnail'] = $this->Upload->result; 
					
					
				}
				
				
			}
		
		
				$Blog= $this->Blogs->patchEntity($Blog, $data);
			
				if ($this->Blogs->save($Blog))
				{
				   $this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				
				}elseif(!$Blog->getErrors()){
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				}
		}
		
		 $this->set('Blog', $Blog);	
			
	}
	
	public function edit($id = null){
	
	  $this->set('title', 'Update Blog');
	  $this->loadModel('BlogCategories');
	  $BlogCategories = $this->BlogCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where()->toArray();
      $this->set('BlogCategories', $BlogCategories);
	  
	
	  
	  
	 
	  
	  $Blog = $this->Blogs->get($id);
	  $this->set('Blog' ,$Blog);
	  
	  if ($this->request->is('post') || $this->request->is('put'))
		{
			  $data = $this->request->getData();
			
			  $Blog = $this->Blogs->patchEntity($Blog, $data);
              $this->set('Blog' ,$Blog);
			
			if (!empty($data['image_file']['name']))
			{
				
				if(($data['image_file']['size']/1024) > 800){
					$this->Flash->error(__('Image size is greater then 800kb. Please choose smaller image.'));	
					return;
					}
				
				$result = $this->Upload->upload($data['image_file'], $this->file_path, null,  array('type' => 'resize', 'size' => '1000', 'output' => 'png') ,null);
				
				if(count($this->Upload->errors) > 0)
				{
					unset($data['image_file']);
					$this->Flash->error(__($this->Upload->errors[0]));	
					return;
				}
				else
				{
					$data['image'] = $this->Upload->result; 
					$data['image_name'] = $data['image_file']['name']; 
					
				}
				
				$result = $this->Upload->upload($data['image_file'], $this->file_path.'thumbnails/', null,  array('type' => 'resize', 'size' => '300', 'output' => 'png') ,null);
				
				if(count($this->Upload->errors) > 0)
				{
					$this->Flash->error(__($this->Upload->errors[0]));	
					return;
				}
				else
				{
					$data['thumbnail'] = $this->Upload->result; 
					
					
				}
				
				
			}
		
				
				$Blog = $this->Blogs->patchEntity($Blog, $data);
			
				if ($this->Blogs->save($Blog))
				{
				   $this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				
				}elseif(!$Blog->getErrors()){
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				}
		}
		
			
			
	}
	
public function delete($id = null){

	  $Category = $this->Blogs->get($id);
	 
	 // if ($this->request->is('post') || $this->request->is('put'))
		{
			 
				if ($this->Blogs->delete($Category))
				{
					$this->Flash->success(__('Record deleted successfully.'));
					$this->redirect(['action' => 'index']);
				}else{
					
				 $this->Flash->error(__('Record could not deleted. Please try again later.'));	
				
				}
		}
	}

}
