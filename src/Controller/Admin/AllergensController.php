<?php

namespace App\Controller\Admin;
use App\Controller\AppController;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class AllergensController extends AppController
{
    public function initialize() {

        parent::initialize();

        $this->file_path = WWW_ROOT . 'img' . DS . 'Allergens' . DS;
         $this->loadComponent('Upload');
    }

    public function index($id = null) {
    
    if($id){
   $conditions = ['parent_id' => $id] ;
    }else{
    $conditions = ['parent_id' => 0] ; 
     }
	$query = $this->Allergens->find('all')->where($conditions);
        $this->paginate['limit'] = 25;
        $this->paginate['order'] = ['id' => 'DESC' ];
        $Allergens = $this->paginate($query, array('url' => '/Allergens/'));
        $this->set('Allergens', $Allergens);
       
	   }
 
    public function add(){
        
	  $Allergy = $this->Allergens->newEntity();
	  
	  $this->set('Allergy' ,$Allergy);
	  if ($this->request->is('post'))
		{
			
			    $data = $this->request->getData();
				$Allergy= $this->Allergens->patchEntity($Allergy, $data);
				$this->set('Allergy' ,$Allergy);
				
              if (!empty($data['image_file']['name']))
			  {
				
				if(($data['image_file']['size']/1024) > 100){
					$this->Flash->error(__('Image size is greater then 100kb. Please choose smaller image.'));	
					return;
					}
				
				$result = $this->Upload->upload($data['image_file'], $this->file_path, null,  array('type' => 'resize', 'size' => '300', 'output' => 'png') ,null);
				
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
				
				$result = $this->Upload->upload($data['image_file'], $this->file_path.'thumbnails/', null,  array('type' => 'resize', 'size' => '150', 'output' => 'png') ,null);
				
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
		
			   $Allergy= $this->Allergens->patchEntity($Allergy, $data);
			
				if ($this->Allergens->save($Allergy))
				{
					$this->Flash->success(__('Record saved successfully.'));
					return $this->redirect(['action' => 'index']);
				
				}elseif(!$Allergy->getErrors()){
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				
				}
		}
		
		$this->set('Allergy' ,$Allergy);
			
			
	}
	
	public function edit($id = null){
        $MainAllergens = $this->Allergens->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status' => 'ACTIVE', 'parent_id' => 0])->toArray();
        $this->set('MainAllergens', $MainAllergens);
	  $Allergy = $this->Allergens->get($id);
	  $this->set('Allergy' ,$Allergy);
	  
	  if ($this->request->is('post') || $this->request->is('put'))
		{
			 $data = $this->request->getData();
			
			 $Allergy= $this->Allergens->patchEntity($Allergy, $data);
			 $this->set('Allergy' ,$Allergy);
				
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
			
				$Allergy= $this->Allergens->patchEntity($Allergy, $data);
			
				if ($this->Allergens->save($Allergy))
				{
					$this->Flash->success(__('Record saved successfully.'));
					return $this->redirect(['action' => 'index']);
					
				}elseif(!$Allergy->getErrors()){
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				
				}
		}
	} 
	
	public function delete($id = null){

	  $Allergy = $this->Allergens->get($id);
	 
	 // if ($this->request->is('post') || $this->request->is('put'))
		{
			 
				if ($this->Allergens->delete($Allergy))
				{
					$this->Flash->success(__('Record deleted successfully.'));
					return $this->redirect(['action' => 'index']);
				}else{
					
				 $this->Flash->error(__('Record could not deleted. Please try again later.'));	
				
				}
		}
	}
	
	public function changestatus($id = null){

	  $Allergy = $this->Allergens->get($id);
	
	  if (!$Allergy){
	  		
			$this->Flash->error(__('Invalid Allergy.'));	
	  		return $this->redirect($this->referer());
		
		}	
		
		
	   
	   if($Allergy['status'] == 'ACTIVE')
		{
			$data['status'] = 'INACTIVE';
		}else{
			$data['status'] = 'ACTIVE';
		}
		
		$Allergy= $this->Allergens->patchEntity($Allergy, $data);
		if ($this->Allergens->save($Allergy))
		{
			$this->Flash->success(__('Status updated successfully.'));
		}else{
		    $this->Flash->error(__('Status could not updated. Please try again later.'));	
		}	
		
		return $this->redirect($this->referer());
			
	}
}
