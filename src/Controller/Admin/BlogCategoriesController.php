<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;

class BlogCategoriesController extends AppController {

    public function initialize() {
        parent::initialize();
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->product_file_path = WWW_ROOT . 'img' . DS . 'blog' . DS;
        $this->loadComponent('Upload');
    }

   

    public function index() {
	
		$conditions = [] ;
		$query = $this->BlogCategories->find('all')->where($conditions);
        $this->paginate['limit'] = 25;
        $this->paginate['order'] = ['created' => 'DESC', ];
        $BlogCategories = $this->paginate($query, array('url' => '/BlogCategories/'));
        $this->set('BlogCategories', $BlogCategories);
  
    }

 
    public function add(){
	
	  
	  $Category = $this->BlogCategories->newEntity();
 	  $this->set('Category', $Category);
 
	  if ($this->request->is('post'))
		{
			    $data = $this->request->getData();
             	$Category= $this->BlogCategories->patchEntity($Category, $data);
			
				if ($this->BlogCategories->save($Category))
				{
					$this->Flash->success(__('Category added successfully.'));
					$this->redirect(['action' => 'index']);
					
				}elseif(!$Category->getErrors()){
					
					$this->Flash->error(__('Category could not added successfully. Please try again later!'));
					
					}
		}
		  $this->set('Category', $Category);
			
			
	}
	
	public function edit($id = null){
	
	  $Category = $this->BlogCategories->get($id);
	  $this->set('Category' ,$Category);
	  
	  if ($this->request->is('post') || $this->request->is('put'))
		{
			     $data = $this->request->getData();
            
				$Category= $this->BlogCategories->patchEntity($Category, $data);
				if($this->BlogCategories->save($Category))
				{
					$this->Flash->success(__('Category saved successfully.'));
					$this->redirect(['action' => 'index']);
				}elseif(!$Category->getErrors()){
					$this->Flash->error(__('Category could not saved successfully. Please try again later!'));
					}
		}
		
			
			
	}
	
	
	public function delete($id = null){
		
				   $this->loadModel('Blogs');

	  $Category = $this->BlogCategories->get($id);
	 
	 // if ($this->request->is('post') || $this->request->is('put'))
		{
			 
				if ($this->BlogCategories->delete($Category))
				{
					
					$this->Blogs->deleteAll(['blog_category_id' =>$Category->id ]);
					$this->Flash->success(__('Record deleted successfully.'));
					return $this->redirect(['action' => 'index']);
				}else{
					
				 $this->Flash->error(__('Record could not deleted. Please try again later.'));	
				
				}
		}
	}
	


}
