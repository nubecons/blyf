<?php

namespace App\Controller\Admin;
use App\Controller\AppController;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class CategoriesController extends AppController
{

   
    public function index($id = null) {
    
    if($id){
   $conditions = ['parent_id' => $id] ;
    }else{
    $conditions = ['parent_id' => 0] ; 
     }
	$query = $this->Categories->find('all')->where($conditions);
        $this->paginate['limit'] = 25;
        $this->paginate['order'] = ['id' => 'desc' ];
        $Categories = $this->paginate($query, array('url' => '/Categories/'));
        $this->set('Categories', $Categories);
       
	   }
 
    public function add(){
		
	 $MainCategories = $this->Categories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status' => 'ACTIVE', 'parent_id' => 0])->toArray();
	 $this->set('MainCategories', $MainCategories);
	 
	 $Category = $this->Categories->newEntity();
	  
	  $this->set('Category' ,$Category);
	  if ($this->request->is('post'))
		{
			   $data = $this->request->getData();
			   $Category= $this->Categories->patchEntity($Category, $data);
			
				if ($this->Categories->save($Category))
				{
					$this->Flash->success(__('Record saved successfully.'));
					return $this->redirect(['action' => 'index']);
				
				}elseif(!$Category->getErrors()){
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				 
				}
		}
		
		$this->set('Category' ,$Category);
			
			
	}
	
	public function edit($id = null){
      
	  $MainCategories = $this->Categories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status' => 'ACTIVE', 'parent_id' => 0])->toArray();
      $this->set('MainCategories', $MainCategories);
	  $Category = $this->Categories->get($id);
	  $this->set('Category' ,$Category);
	  
	  if ($this->request->is('post') || $this->request->is('put'))
		{
			    $data = $this->request->getData();
				$Category= $this->Categories->patchEntity($Category, $data);
			
				if ($this->Categories->save($Category))
				{
					$this->Flash->success(__('Record saved successfully.'));
				return	$this->redirect(['action' => 'index']);
				}elseif(!$Category->getErrors()){
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				
				}
		}
	} 
	
	public function sub() {
		
		$MainCategories = $this->Categories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['parent_id' => 0])->toArray();
	    $this->set('MainCategories', $MainCategories);
    
		$conditions = ['parent_id != ' => 0] ; 
		$query = $this->Categories->find('all')->where($conditions);
		$this->paginate['limit'] = 50;
		$this->paginate['order'] = ['id' => 'desc' ];
		$Categories = $this->paginate($query, array('url' => '/Categories/'));
		$this->set('Categories', $Categories);
       
	   }
 
    public function addSub(){
		
	 $MainCategories = $this->Categories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status' => 'ACTIVE', 'parent_id' => 0])->toArray();
	 $this->set('MainCategories', $MainCategories);
	 
	 $Category = $this->Categories->newEntity();
	  
	  $this->set('Category' ,$Category);
	  if ($this->request->is('post'))
		{
			   $data = $this->request->getData();
			   $Category= $this->Categories->patchEntity($Category, $data);
			
				if ($this->Categories->save($Category))
				{
					$this->Flash->success(__('Record saved successfully.'));
				return	$this->redirect(['action' => 'sub']);
				
				}elseif(!$Category->getErrors()){
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				 
				}
		}
		
		$this->set('Category' ,$Category);
			
			
	}
	
	public function editSub($id = null){
      
	  
	  $MainCategories = $this->Categories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['parent_id' => 0])->toArray();
      $this->set('MainCategories', $MainCategories);
	  
	  $Category = $this->Categories->get($id);
	  $this->set('Category' ,$Category);
	  
	  if ($this->request->is('post') || $this->request->is('put'))
		{
			    $data = $this->request->getData();
				$Category= $this->Categories->patchEntity($Category, $data);
			
				if ($this->Categories->save($Category))
				{
					$this->Flash->success(__('Record saved successfully.'));
					return $this->redirect(['action' => 'sub']);
				}elseif(!$Category->getErrors()){
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				
				}
		}
	} 
	
	
	public function changestatus($id = null){

	  $Category = $this->Categories->get($id);
	
	  if (!$Category){
	  		
			$this->Flash->error(__('Invalid Category.'));	
	  		return $this->redirect($this->referer());
		
		}	
		
		
	   
	   if($Category['status'] == 'ACTIVE')
		{
			$data['status'] = 'INACTIVE';
		}else{
			$data['status'] = 'ACTIVE';
		}
		
		$Category= $this->Categories->patchEntity($Category, $data);
		if ($this->Categories->save($Category))
		{
			$this->Flash->success(__('Status updated successfully.'));
		}else{
		    $this->Flash->error(__('Status could not updated. Please try again later.'));	
		}	
		
		return $this->redirect($this->referer());
			
	}
	
	
	/*public function delete($id = null){

	  $Category = $this->Categories->get($id);
	 
	 // if ($this->request->is('post') || $this->request->is('put'))
		{
			 
				if ($this->Categories->delete($Category))
				{
					$this->Flash->success(__('Record deleted successfully.'));
					$this->redirect(['action' => 'index']);
				}else{
					
				 $this->Flash->error(__('Record could not deleted. Please try again later.'));	
				
				}
		}
	}*/
}
