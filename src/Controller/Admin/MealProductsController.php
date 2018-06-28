<?php

namespace App\Controller\Admin;
use App\Controller\AppController;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class MealProductsController extends AppController
{
    public function initialize() {

        parent::initialize();

         $this->file_path = WWW_ROOT . 'img' . DS . 'meals' . DS;
         $this->loadComponent('Upload');
    }

    public function index($id = null) {
		
		if(!$id){
			$this->Flash->error(__('Please select valid meal.'));
			return $this->redirect(['controller'=>'Meals',  'action' => 'index']);
		}
		
		  $this->loadModel('Meals');
		  $Meal = $this->Meals->get($id);
		  
		  if(!$Meal){
			$this->Flash->error(__('Please select valid product.'));
			return $this->redirect(['controller'=>'Meals',  'action' => 'index']);
		  
		  }
		
		$this->set('Meal' , $Meal);
    
	    $this->loadModel('Products');
	    $Products = $this->Products->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where()->toArray();
	    $this->set('Products', $Products);	
		
		$conditions = ['meal_id' => $id] ;
		
		$query = $this->MealProducts->find('all')->where($conditions);
		$this->paginate['limit'] = 25;
		$this->paginate['order'] = ['created' => 'ASC' ];
		$MealProducts = $this->paginate($query, array('url' => '/MealProducts/'));
		$this->set('MealProducts', $MealProducts);
       
	   }
 
    public function add($id){
		
		if(!$id){
			$this->Flash->error(__('Please select valid product.'));
			return $this->redirect(['controller'=>'meals',  'action' => 'index']);
		}
		
		$this->loadModel('Meals');
		$Meal = $this->Meals->get($id);
		
		if(!$Meal){
			$this->Flash->error(__('Please select valid product.'));
			return $this->redirect(['controller'=>'meals',  'action' => 'index']);
		}
		
	  $this->set('Meal' , $Meal);

$this->loadModel('Categories');
	 	
	 $MainCategories = $this->Categories->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status' => 'ACTIVE', 'parent_id' => 0])->toArray();
	 $this->set('MainCategories', $MainCategories);
	  $ProIdz = $this->MealProducts->find('list', ['keyField' => 'product_id', 'valueField' => 'product_id'])->where(['meal_id'=> $id])->toArray();

	  $this->loadModel('Products');
      
	  $IngCond = [];
	  
	  if(count($ProIdz) > 0)
	  {
	  	$IngCond['id not in'] = $ProIdz ;
	  }
	  
	  $Products = $this->Products->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where($IngCond)->toArray();
	  $this->set('Products', $Products);
	  
		 
        
	  $MealProduct = $this->MealProducts->newEntity();
	  
	  $this->set('MealProduct' ,$MealProduct);
	  
	  if ($this->request->is('post'))
		{
          
			   $data = $this->request->getData();
			   $data['meal_id']  = $Meal->id;
			   $MealProduct = $this->MealProducts->patchEntity($MealProduct, $data);
			
				if ($this->MealProducts->save($MealProduct))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index',$Meal->id]);
				
				}elseif(!$MealProduct->getErrors()){
					
				  $this->Flash->error(__('Record could not saved. Please try again later.'));	
				 
				}
		}
		
		$this->set('MealProduct' ,$MealProduct);
			
			
	}
	
	
	
	public function delete($id = null){

	  $MealProduct = $this->MealProducts->get($id);
	 
	 // if ($this->request->is('post') || $this->request->is('put'))
		{
			 
				if ($this->MealProducts->delete($MealProduct))
				{
					$this->Flash->success(__('Record deleted successfully.'));
					$this->redirect(['action' => 'index' ,$MealProduct->meal_id]);
				}else{
					
				 $this->Flash->error(__('Record could not deleted. Please try again later.'));	
				
				}
		}
	}
}
