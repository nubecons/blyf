<?php

namespace App\Controller\Admin;
use App\Controller\AppController;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class ProductsController extends AppController
{
    public function initialize() {

        parent::initialize();

        $this->file_path = WWW_ROOT . 'img' . DS . 'Products' . DS;
         $this->loadComponent('Upload');
    }

    public function index($id = null) {
    
	if($id){
		$conditions = ['parent_id' => $id] ;
	}else{
		$conditions = ['parent_id' => 0] ; 
	}
	
	$conditions = [] ; 
	$query = $this->Products->find('all')->where($conditions);
	$this->paginate['limit'] = 25;
	$this->paginate['order'] = ['created' => 'ASC' ];
	$Products = $this->paginate($query, array('url' => '/Products/'));
	$this->set('Products', $Products);
       
	   }
 
    public function add(){
		
	 $this->loadModel('Categories');
	 	
	 $MainCategories = $this->Categories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status' => 'ACTIVE', 'parent_id' => 0])->toArray();
	 $this->set('MainCategories', $MainCategories);
        
	  $Product = $this->Products->newEntity();
	  
	  $this->set('Product' ,$Product);
	  if ($this->request->is('post'))
		{
               if (!empty($this->request->data['image_file']['name'])) {
                $result = $this->Upload->upload($this->request->data['image_file'], $this->file_path, null, null, null);

                if (count($this->Upload->errors) > 0) {
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
			   $data = $this->request->data;
			   $Product= $this->Products->patchEntity($Product, $this->request->data);
			
				if ($this->Products->save($Product))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				
				}else{
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				  $this->set('errors', $Product->errors());
				}
		}
		
		$this->set('Product' ,$Product);
			
			
	}
	
	public function edit($id = null){
		
	 $this->loadModel('Categories');
	 	
	 $MainCategories = $this->Categories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status' => 'ACTIVE', 'parent_id' => 0])->toArray();
	 $this->set('MainCategories', $MainCategories);	
       
	  $Product = $this->Products->get($id);
	  $this->set('Product' ,$Product);
	  
	  if ($this->request->is('post') || $this->request->is('put'))
		{
			
			   if (!empty($this->request->data['image_file']['name'])) {
                $result = $this->Upload->upload($this->request->data['image_file'], $this->file_path, null, null, null);

                if (count($this->Upload->errors) > 0) {
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
			 $data = $this->request->data;
				$Product= $this->Products->patchEntity($Product, $this->request->data);
			
				if ($this->Products->save($Product))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				}else{
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				
				}
		}
	} 
	
	public function delete($id = null){

	  $Product = $this->Products->get($id);
	 
	 // if ($this->request->is('post') || $this->request->is('put'))
		{
			 
				if ($this->Products->delete($Product))
				{
					$this->Flash->success(__('Record deleted successfully.'));
					$this->redirect(['action' => 'index']);
				}else{
					
				 $this->Flash->error(__('Record could not deleted. Please try again later.'));	
				
				}
		}
	}
}
