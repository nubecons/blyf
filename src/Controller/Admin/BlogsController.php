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
        $this->product_file_path = WWW_ROOT . 'img' . DS . 'blog' . DS;
        $this->loadComponent('Upload');
    }

   

    public function index() {
		
	    $this->loadModel('BlogCategories');
	    $BlogCategories = $this->BlogCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => 0])->toArray();
        $this->set('BlogCategories', $BlogCategories);
		
		
		
		
		$conditions = [] ;
		$query = $this->Blogs->find('all')->where($conditions);
        $this->paginate['limit'] = 25;
        $this->paginate['order'] = ['created' => 'DESC', ];
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
			 $data = $this->request->data;
            
			 
            
			if (!empty($this->request->data['image_file']['name']))
			{
				$result = $this->Upload->upload($this->request->data['image_file'], $this->product_file_path, null,  null ,null);
				
				if(count($this->Upload->errors) > 0)
				{
					//unset($this->request->data['image_file']);
				    $this->Flash->error(__($this->Upload->errors[0]));	
					return;
				}
				else
				{
					$this->request->data['image'] = $this->Upload->result; 
					$this->request->data['image_name'] = $this->request->data['image_file']['name']; 
					
				}
			}
		
				$Blog= $this->Blogs->patchEntity($Blog, $this->request->data);
			
				if ($this->Blogs->save($Blog))
				{
				   $this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				
				}else{
					
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
			 $data = $this->request->data;
            
			 
            
			if (!empty($this->request->data['image_file']['name']))
			{
				$result = $this->Upload->upload($this->request->data['image_file'], $this->product_file_path, null,  null ,null);
				
				if(count($this->Upload->errors) > 0)
				{
					unset($this->request->data['image_file']);
					$this->Flash->error(__($this->Upload->errors[0]));	
					return;
				}
				else
				{
					$this->request->data['image'] = $this->Upload->result; 
					$this->request->data['image_name'] = $this->request->data['image_file']['name']; 
					
				}
			}
		
				
				$Blog= $this->Blogs->patchEntity($Blog, $this->request->data);
			
				if ($this->Blogs->save($Blog))
				{
				   $this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				
				}else{
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				}
		}
		
			
			
	}
	


}
