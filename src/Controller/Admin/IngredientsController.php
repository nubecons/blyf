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

        $this->allergens_file_path = WWW_ROOT . 'img' . DS . 'Ingredients' . DS;
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
               if (!empty($this->request->data['image_file']['name'])) {
                $result = $this->Upload->upload($this->request->data['image_file'], $this->allergens_file_path, null, null, null);

                if (count($this->Upload->errors) > 0) {
                    unset($this->request->data['image_file']);
                } else {
                    $this->request->data['image'] = $this->Upload->result;
                }
            }
			   $data = $this->request->data;
			   $Ingredient= $this->Ingredients->patchEntity($Ingredient, $this->request->data);
			
				if ($this->Ingredients->save($Ingredient))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				
				}else{
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				  $this->set('errors', $Ingredient->errors());
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
			 $data = $this->request->data;
				$Ingredient= $this->Ingredients->patchEntity($Ingredient, $this->request->data);
			
				if ($this->Ingredients->save($Ingredient))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				}else{
					
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
}
