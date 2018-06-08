<?php

namespace App\Controller\Admin;
use App\Controller\AppController;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class ProductIngredientsController extends AppController
{
    public function initialize() {

        parent::initialize();

        $this->file_path = WWW_ROOT . 'img' . DS . 'Ingredients' . DS;
         $this->loadComponent('Upload');
    }

    public function index($id = null) {
		
		if(!$id){
			$this->Flash->error(__('Please select valid product.'));
			return $this->redirect(['controler'=>'products',  'action' => 'index']);
		}
		
		  $this->loadModel('Products');
		  $Product = $this->Products->get($id);
		  
		  if(!$Product){
			$this->Flash->error(__('Please select valid product.'));
			return $this->redirect(['controler'=>'products',  'action' => 'index']);
		  
		  }
		
		$this->set('Product' , $Product);
    
	    $this->loadModel('Ingredients');
	    $Ingredients = $this->Ingredients->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where()->toArray();
	    $this->set('Ingredients', $Ingredients);	
		
		$conditions = ['product_id' => $id] ;
		
		$query = $this->ProductIngredients->find('all')->where($conditions);
		$this->paginate['limit'] = 25;
		$this->paginate['order'] = ['created' => 'ASC' ];
		$ProductIngredients = $this->paginate($query, array('url' => '/ProductIngredients/'));
		$this->set('ProductIngredients', $ProductIngredients);
       
	   }
 
    public function add($id){
		
		if(!$id){
			$this->Flash->error(__('Please select valid product.'));
			return $this->redirect(['controler'=>'products',  'action' => 'index']);
		}
		
		$this->loadModel('Products');
		$Product = $this->Products->get($id);
		
		if(!$Product){
			$this->Flash->error(__('Please select valid product.'));
			return $this->redirect(['controler'=>'products',  'action' => 'index']);
		}
		
	  $this->set('Product' , $Product);

	  $IngIdz = $this->ProductIngredients->find('list', ['keyField' => 'ingredient_id', 'valueField' => 'ingredient_id'])->where(['product_id'=> $id])->toArray();

	  $this->loadModel('Ingredients');
      
	  $IngCond = [];
	  
	  if(count($IngIdz) > 0)
	  {
	  	$IngCond['id not in'] = $IngIdz ;
	  }
	  
	  $Ingredients = $this->Ingredients->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where($IngCond)->toArray();
	  $this->set('Ingredients', $Ingredients);
	  
		 
        
	  $ProductIngredient = $this->ProductIngredients->newEntity();
	  
	  $this->set('ProductIngredient' ,$ProductIngredient);
	  
	  if ($this->request->is('post'))
		{
          
			   $data = $this->request->getData();
			   $data['product_id']  = $Product->id;
			   $ProductIngredient = $this->ProductIngredients->patchEntity($ProductIngredient, $data);
			
				if ($this->ProductIngredients->save($ProductIngredient))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index',$Product->id]);
				
				}else{
					
				  $this->Flash->error(__('Record could not saved. Please try again later.'));	
				 
				}
		}
		
		$this->set('ProductIngredient' ,$ProductIngredient);
			
			
	}
	
	
	
	public function delete($id = null){

	  $Ingredient = $this->ProductIngredients->get($id);
	 
	 // if ($this->request->is('post') || $this->request->is('put'))
		{
			 
				if ($this->ProductIngredients->delete($Ingredient))
				{
					$this->Flash->success(__('Record deleted successfully.'));
					$this->redirect(['action' => 'index' ,$Ingredient->product_id]);
				}else{
					
				 $this->Flash->error(__('Record could not deleted. Please try again later.'));	
				
				}
		}
	}
}
