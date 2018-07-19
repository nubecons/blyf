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
		
	 $this->loadModel('Categories');
	 $Categories = $this->Categories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where()->toArray();
	 $this->set('Categories', $Categories);		
    
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
	 	
	 $Categories = $this->Categories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status' => 'ACTIVE'])->toArray();
	
	 $this->set('Categories', $Categories);
	 
        
	 $Product = $this->Products->newEntity();
	  
	  $this->set('Product' ,$Product);
	  if ($this->request->is('post'))
		{
			
			    $data = $this->request->getData() ;
			  
			
				
				$Product= $this->Products->patchEntity($Product, $data);
				if (!empty($data['image_file']['name']))
				{
				
				if(($data['image_file']['size']/1024) > 150){
					$this->Flash->error(__('Image size is greater then 150kb. Please choose smaller image.'));	
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
				
				$result = $this->Upload->upload($data['image_file'], $this->file_path.'thumbnails/', null,  array('type' => 'resize', 'size' => '400', 'output' => 'png') ,null);
				
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
			 
			   $Product= $this->Products->patchEntity($Product, $data);
			
				if ($this->Products->save($Product))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				
				}elseif(!$Product->getErrors()){
					 $this->Flash->error(__('Record could not saved. Please try again later.'));	
			
				}
		}
		
		$this->set('Product' ,$Product);
			
			
	}
	
	public function edit($id = null){
		
	 $this->loadModel('Categories');
	 	
	 $Categories = $this->Categories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status' => 'ACTIVE'])->toArray();
	
	 $this->set('Categories', $Categories);
	  
	 $Product = $this->Products->get($id);
	 $this->set('Product' ,$Product);
	 
	
	  
	  if ($this->request->is('post') || $this->request->is('put'))
		{
			
 			   $data = $this->request->getData() ;
			   
			  
				
                $Product= $this->Products->patchEntity($Product, $data);
				if (!empty($data['image_file']['name']))
				{
				
				if(($data['image_file']['size']/1024) > 150){
					$this->Flash->error(__('Image size is greater then 150kb. Please choose smaller image.'));	
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
				
				$result = $this->Upload->upload($data['image_file'], $this->file_path.'thumbnails/', null,  array('type' => 'resize', 'size' => '400', 'output' => 'png') ,null);
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
			
			
				$Product= $this->Products->patchEntity($Product, $data);
			
				if ($this->Products->save($Product))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				
				}elseif(!$Product->getErrors()){
					
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
	
	public function saveData(){
		
	
        
	  $Product = $this->Products->newEntity();
	  
	  $this->set('Product' ,$Product);
	  if ($this->request->is('post'))
		{
			
			    $data = $this->request->getData() ;
				
				 $Product= $this->Products->patchEntity($Product, $data);
				if (!empty($data['image_file']['name']))
				{
				
				if(($data['image_file']['size']/1024) > 150){
					echo 'Image size is greater then 150kb. Please choose smaller image.';	
					exit;
					}
				
				$result = $this->Upload->upload($data['image_file'], $this->file_path, null,  array('type' => 'resize', 'size' => '1000', 'output' => 'png') ,null);
				
				if(count($this->Upload->errors) > 0)
				{
					unset($data['image_file']);
					echo $this->Upload->errors[0];	
					exit;
				}
				else
				{
					$data['image'] = $this->Upload->result; 
					$data['image_name'] = $data['image_file']['name']; 
					
				}
				
				$result = $this->Upload->upload($data['image_file'], $this->file_path.'thumbnails/', null,  array('type' => 'resize', 'size' => '400', 'output' => 'png') ,null);
				
				if(count($this->Upload->errors) > 0)
				{
					echo $this->Upload->errors[0];	
					exit;
				}
				else
				{
					$data['thumbnail'] = $this->Upload->result; 
					
					
				}
				
				
			}
			 
			   $Product= $this->Products->patchEntity($Product, $data);
			
				if ($this->Products->save($Product))
				{
					echo 'true';
					exit;
				
				}elseif(!$Product->getErrors()){
					 echo 'Record could not saved. Please try again later.';
					 exit;	
			
				}elseif($Product->getError('title')){
					
				   foreach($Product->getError('title') as $err){
					 echo $err." \n";  
					 }
				   exit;		
				 
				}elseif($Product->getError('image')){
					
				echo  $error = $Product->getError('image');	
				   exit;	
				 
				}else{
					 echo 'Record could not saved. Please try again later.';
					 exit;	
			
				}
		}
		
		$this->set('Product' ,$Product);
		exit;	
			
	}
	
	public function getCategories($id = null){
		$this->viewBuilder()->setLayout(false);
		
		 $this->loadModel('Categories');
		 $Categories = [];
		
		 if($id){
			$Categories = $this->Categories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status' => 'ACTIVE', 'parent_id' => $id])->toArray();
			}
			
		 
		
		 $this->set('Categories' ,$Categories);
		}
	
}
