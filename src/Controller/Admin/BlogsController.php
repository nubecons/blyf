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
        
       /* $Blogs = $this->Blogs->find('all')->where()->toArray();
        $this->set('Blogs', $Blogs);*/
    }

 
    public function add(){
	
	  $this->set('title', 'Add Blog');
	  $this->loadModel('BlogCategories');
	  $BlogCategories = $this->BlogCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => 0])->toArray();
      $this->set('BlogCategories', $BlogCategories);
	  
	/*  $BlogCategorieslvl2 =[];
	  $BlogCategorieslvl3 =[];
	 
	  foreach($BlogCategories as $key => $val){
		      
			  $BlogCategorieslvl2[$val] = $this->BlogCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => $key])->toArray();
		   
		     foreach($BlogCategorieslvl2[$val] as $key2 => $val2){
		              $BlogCategorieslvl3[$val2] = $this->BlogCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => $key2])->toArray();
		      }
		 
		  }
		  
		  
	  $this->set('BlogCategorieslvl2', $BlogCategorieslvl2);
	  $this->set('BlogCategorieslvl3', $BlogCategorieslvl3);*/
	  
	  $Blog = $this->Blogs->newEntity();
	  
	  if ($this->request->is('post'))
		{
			 $data = $this->request->data;
            
			 
            
			if (!empty($this->request->data['image_file']['name']))
			{
				$result = $this->Upload->upload($this->request->data['image_file'], $this->product_file_path, null,  null ,null);
				
				if(count($this->Upload->errors) > 0)
				{
					unset($this->request->data['image_file']);
				}
				else
				{
					$this->request->data['image'] = $this->Upload->result; 
					
				}
			}
		
				$Blog= $this->Blogs->patchEntity($Blog, $this->request->data);
			
				if ($this->Blogs->save($Blog))
				{
					//$this->Flash->success(__('File uploaded successfully.'));
					$this->redirect(['action' => 'index']);
				}
		}
		
			
			
	}
	
	public function edit($id = null){
	
	  $this->set('title', 'Update Blog');
	  $this->loadModel('BlogCategories');
	  $BlogCategories = $this->BlogCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => 0])->toArray();
      $this->set('BlogCategories', $BlogCategories);
	  
	/*  $BlogCategorieslvl2 =[];
	  $BlogCategorieslvl3 =[];
	 
	  foreach($BlogCategories as $key => $val){
		      
			  $BlogCategorieslvl2[$val] = $this->BlogCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => $key])->toArray();
		   
		     foreach($BlogCategorieslvl2[$val] as $key2 => $val2){
		              $BlogCategorieslvl3[$val2] = $this->BlogCategories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status'=>'ACTIVE' ,'parent_id' => $key2])->toArray();
		      }
		 
		  }
		  
		  
	  $this->set('BlogCategorieslvl2', $BlogCategorieslvl2);
	  $this->set('BlogCategorieslvl3', $BlogCategorieslvl3);*/
	  
	  
	 
	  
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
				}
				else
				{
					$this->request->data['image'] = $this->Upload->result; 
					
				}
			}
		
				
				$Blog= $this->Blogs->patchEntity($Blog, $this->request->data);
			
				if ($this->Blogs->save($Blog))
				{
					//$this->Flash->success(__('File uploaded successfully.'));
					$this->redirect(['action' => 'index']);
				}
		}
		
			
			
	}
	


}
