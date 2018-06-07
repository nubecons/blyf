<?php

namespace App\Controller\Admin;
use App\Controller\AppController;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class DishesController extends AppController
{
    public function initialize() {

        parent::initialize();

        $this->allergens_file_path = WWW_ROOT . 'img' . DS . 'Dishes' . DS;
         $this->loadComponent('Upload');
    }

    public function index($id = null) {
    
    if($id){
   $conditions = ['parent_id' => $id] ;
    }else{
    $conditions = ['parent_id' => 0] ; 
     }
	 $conditions = [] ; 
	$query = $this->Dishes->find('all')->where($conditions);
        $this->paginate['limit'] = 25;
        $this->paginate['order'] = ['created' => 'ASC' ];
        $Dishes = $this->paginate($query, array('url' => '/Dishes/'));
        $this->set('Dishes', $Dishes);
       
	   }
 
    public function add(){
        
	  $Dish = $this->Dishes->newEntity();
	  
	  $this->set('Dish' ,$Dish);
	  if ($this->request->is('post'))
		{
               if (!empty($this->request->data['image_file']['name'])) {
                $result = $this->Upload->upload($this->request->data['image_file'], $this->allergens_file_path, null, null, null);

                if (count($this->Upload->errors) > 0) {
                    unset($this->request->data['image_file']);
                } else {
                    $this->request->data['image'] = $this->Upload->result;
                }
            }
			   $data = $this->request->data;
			   $Dish= $this->Dishes->patchEntity($Dish, $this->request->data);
			
				if ($this->Dishes->save($Dish))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				
				}else{
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				  $this->set('errors', $Dish->errors());
				}
		}
		
		$this->set('Dish' ,$Dish);
			
			
	}
	
	public function edit($id = null){
       
	  $Dish = $this->Dishes->get($id);
	  $this->set('Dish' ,$Dish);
	  
	  if ($this->request->is('post') || $this->request->is('put'))
		{
			 $data = $this->request->data;
				$Dish= $this->Dishes->patchEntity($Dish, $this->request->data);
			
				if ($this->Dishes->save($Dish))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				}else{
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				
				}
		}
	} 
	
	public function delete($id = null){

	  $Dish = $this->Dishes->get($id);
	 
	 // if ($this->request->is('post') || $this->request->is('put'))
		{
			 
				if ($this->Dishes->delete($Dish))
				{
					$this->Flash->success(__('Record deleted successfully.'));
					$this->redirect(['action' => 'index']);
				}else{
					
				 $this->Flash->error(__('Record could not deleted. Please try again later.'));	
				
				}
		}
	}
}
