<?php

namespace App\Controller\Admin;
use App\Controller\AppController;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class IngredientsController extends AppController
{
    public function initialize() {

        parent::initialize();

        $this->file_path = WWW_ROOT . 'img' . DS . 'Ingredients' . DS;
         $this->loadComponent('Upload');
    }

    public function index($id = null) {
    
    if($id){
   $conditions = ['parent_id' => $id] ;
    }else{
    $conditions = ['parent_id' => 0] ; 
     }
	$query = $this->Ingredients->find('all')->where($conditions);
        $this->paginate['limit'] = 25;
        $this->paginate['order'] = ['created' => 'ASC' ];
        $Ingredients = $this->paginate($query, array('url' => '/Ingredients/'));
        $this->set('Ingredients', $Ingredients);
       
	   }
 
    public function add(){
        
	  $Ingredient = $this->Ingredients->newEntity();
	  
	  $this->set('Ingredient' ,$Ingredient);
	  if ($this->request->is('post'))
		{
			    $data = $this->request->getData();
				
                $Ingredient= $this->Ingredients->patchEntity($Ingredient, $data);
			    $this->set('Ingredient' ,$Ingredient);
				
				if (!empty($data['image_file']['name']))
				{
				
				if(($data['image_file']['size']/1024) > 100){
					$this->Flash->error(__('Image size is greater then 100kb. Please choose smaller image.'));	
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
				
				$result = $this->Upload->upload($data['image_file'], $this->file_path.'thumbnails/', null,  array('type' => 'resize', 'size' => '100', 'output' => 'png') ,null);
				
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
		
			 
			   $Ingredient= $this->Ingredients->patchEntity($Ingredient, $data);
			
				if ($this->Ingredients->save($Ingredient))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				
				}elseif(!$Ingredient->getErrors()){
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				 
				}
		}
		
		$this->set('Ingredient' ,$Ingredient);
			
			
	}
	
	public function edit($id = null){
		
		$MainIngredients = $this->Ingredients->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status' => 'ACTIVE', 'parent_id' => 0])->toArray();
		$this->set('MainIngredients', $MainIngredients);
		$Ingredient = $this->Ingredients->get($id);
		$this->set('Ingredient' ,$Ingredient);
	  
	  if ($this->request->is('post') || $this->request->is('put'))
		{
			      $data = $this->request->getData();
				  $Ingredient= $this->Ingredients->patchEntity($Ingredient, $data);
				  $this->set('Ingredient' ,$Ingredient);
				
				if (!empty($data['image_file']['name']))
				{
				
				if(($data['image_file']['size']/1024) > 100){
					$this->Flash->error(__('Image size is greater then 100kb. Please choose smaller image.'));	
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
				
				$result = $this->Upload->upload($data['image_file'], $this->file_path.'thumbnails/', null,  array('type' => 'resize', 'size' => '100', 'output' => 'png') ,null);
				
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
		
				
				$Ingredient= $this->Ingredients->patchEntity($Ingredient, $data);
			
				if ($this->Ingredients->save($Ingredient))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				}elseif(!$Ingredient->getErrors()){
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				
				}
		}
	} 
	
	public function delete($id = null){

	  $Ingredient = $this->Ingredients->get($id);
	 
	 // if ($this->request->is('post') || $this->request->is('put'))
		{
			 
				if ($this->Ingredients->delete($Ingredient))
				{
					$this->Flash->success(__('Record deleted successfully.'));
					$this->redirect(['action' => 'index']);
				}else{
					
				 $this->Flash->error(__('Record could not deleted. Please try again later.'));	
				
				}
		}
	}
	
	
	public function changestatus($id = null){

	  $Ingredient = $this->Ingredients->get($id);
	
	  if (!$Ingredient){
	  		
			$this->Flash->error(__('Invalid Ingredient.'));	
	  		return $this->redirect($this->referer());
		
		}	
		
		
	   
	   if($Ingredient['status'] == 'ACTIVE')
		{
			$data['status'] = 'INACTIVE';
		}else{
			$data['status'] = 'ACTIVE';
		}
		
		$Ingredient= $this->Ingredients->patchEntity($Ingredient, $data);
		if ($this->Ingredients->save($Ingredient))
		{
			$this->Flash->success(__('Status updated successfully.'));
		}else{
		    $this->Flash->error(__('Status could not updated. Please try again later.'));	
		}	
		
		return $this->redirect($this->referer());
			
	}
	
	  public function saveData(){
        
	  $Ingredient = $this->Ingredients->newEntity();
	  
	  $this->set('Ingredient' ,$Ingredient);
	  
	    $error = false;
	  if ($this->request->is('post'))
		{
			    $data = $this->request->getData();
				
				
                $Ingredient= $this->Ingredients->patchEntity($Ingredient, $data);
			    $this->set('Ingredient' ,$Ingredient);
				
				if (!empty($data['image_file']['name']))
				{
				
				if(($data['image_file']['size']/1024) > 100){
					echo $error = 'Image size is greater then 100kb. Please choose smaller image.';	
					exit;
					}
				
				$result = $this->Upload->upload($data['image_file'], $this->file_path, null,  array('type' => 'resize', 'size' => '1000', 'output' => 'png') ,null);
				
				if(count($this->Upload->errors) > 0)
				{
					unset($data['image_file']);
					echo $error = $this->Upload->errors[0];	
					exit;
				}
				else
				{
					$data['image'] = $this->Upload->result; 
					$data['image_name'] = $data['image_file']['name']; 
					
				}
				
				$result = $this->Upload->upload($data['image_file'], $this->file_path.'thumbnails/', null,  array('type' => 'resize', 'size' => '100', 'output' => 'png') ,null);
				
				if(count($this->Upload->errors) > 0)
				{
					echo $error = $this->Upload->errors[0];	
					exit;
				}
				else
				{
					$data['thumbnail'] = $this->Upload->result; 
					
					
				}
				
				
			}
		
			 
			   $Ingredient= $this->Ingredients->patchEntity($Ingredient, $data);
			
				if ($this->Ingredients->save($Ingredient))
				{
					echo $error = 'true';
					exit;
				
				}elseif(!$Ingredient->getErrors()){
					
				 echo  $error = 'Record could not saved. Please try again later.';
				 exit;	
				 
				}elseif($Ingredient->getError('title')){
					
				   foreach($Ingredient->getError('title') as $err){
					 echo $err." \n";  
					 }
				   exit;		
				 
				}elseif($Ingredient->getError('image')){
					
				echo  $error = $Ingredient->getError('image');	
				   exit;	
				 
				}
		}
		
		echo $error ;
		$this->set('Ingredient' ,$Ingredient);
		exit;
			
			
	}
	
}
