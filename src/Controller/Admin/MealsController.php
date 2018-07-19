<?php

namespace App\Controller\Admin;
use App\Controller\AppController;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class MealsController extends AppController
{
    public function initialize() {

        parent::initialize();

        $this->file_path = WWW_ROOT . 'img' . DS . 'Meals' . DS;
         $this->loadComponent('Upload');
    }

    public function index() {
    

	$conditions = [] ; 
	$query = $this->Meals->find('all')->where($conditions);
	$this->paginate['limit'] = 25;
	$this->paginate['order'] = ['created' => 'ASC' ];
	$Meals = $this->paginate($query, array('url' => '/Meals/'));
	$this->set('Meals', $Meals);
       
	   }
 
    public function add(){
		
	  
	  $Meal = $this->Meals->newEntity();
	  
	  $this->set('Meal' ,$Meal);
	  if ($this->request->is('post'))
		{
			
			    $data = $this->request->getData() ;
				
				$Meal= $this->Meals->patchEntity($Meal, $data);
				$this->set('Meal' ,$Meal);
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
		
			 
			   $Meal= $this->Meals->patchEntity($Meal, $data);
			
				if ($this->Meals->save($Meal))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				
				}elseif(!$Meal->getErrors()){
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
			
				}
		}
		
		$this->set('Meal' ,$Meal);
			
			
	}
	
	public function edit($id = null){
		
	     
	  $Meal = $this->Meals->get($id);
	  $this->set('Meal' ,$Meal);
	  
	  if ($this->request->is('post') || $this->request->is('put'))
		{
			
			
 			   $data = $this->request->getData() ;
				
              $Meal= $this->Meals->patchEntity($Meal, $data);
				$this->set('Meal' ,$Meal);
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
			
			   
				$Meal = $this->Meals->patchEntity($Meal, $data);
			
				if ($this->Meals->save($Meal))
				{
					
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
					
				}elseif(!$Meal->getErrors()){
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				
				}
				
				
		}
	} 
	
	public function delete($id = null){

	  $Meal = $this->Meals->get($id);
	 
	 // if ($this->request->is('post') || $this->request->is('put'))
		{
			 
				if ($this->Meals->delete($Meal))
				{
					$this->Flash->success(__('Record deleted successfully.'));
					$this->redirect(['action' => 'index']);
				}else{
					
				 $this->Flash->error(__('Record could not deleted. Please try again later.'));	
				
				}
		}
	}
}
