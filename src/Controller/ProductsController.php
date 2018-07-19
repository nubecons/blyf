<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

use App\View\Helper\GetInfoHelper;

class ProductsController extends AppController
{
 function initialize() {

        parent::initialize();
    }

    function beforeFilter(Event $event) {

        parent::beforeFilter($event);


        $this->Auth->allow(['customize' ,'snacks','dishes' ,'cart' ,'checkout']);
    }

public function addtocart($id , $type){
	
	$Cart = $this->Session->read('Cart');
	if(!isset($cart[$id])){
		//$cart['product_idz'][] = 'bb' ;
		$Cart[$id]['id'] = $id;
		$Cart[$id]['type'] = $type;
		$Cart[$id]['quantity'] = 3;
		}
		$this->Session->write('Cart' , $Cart);
		debug($Cart);
		exit;
	
	//
	
	}
 
 public function customize()
    {
		
		$this->loadModel('Meals');
		$Meals = $this->Meals->find()->where(['status' => 'ACTIVE'])->all();
	    $this->set('Meals' ,$Meals);	

    }

public function dishes()
    {
		
		$Protiens = $this->Products->find()->where(['status' => 'ACTIVE', 'category_id' => 1])->all();
	    $this->set('Protiens' ,$Protiens);
		
		$Sides = $this->Products->find()->where(['status' => 'ACTIVE', 'category_id' => 2])->all();
	    $this->set('Sides' , $Sides);
		
		$Sauces = $this->Products->find()->where(['status' => 'ACTIVE', 'category_id' => 3])->all();
	    $this->set('Sauces' ,$Sauces);	
		

    }
	
public function snacks()
    {
		
		$Snacks = $this->Products->find()->where(['status' => 'ACTIVE', 'category_id' => 4])->all();
	    $this->set('Snacks' ,$Snacks);
		
		$Drinks = $this->Products->find()->where(['status' => 'ACTIVE', 'category_id' => 5])->all();
	    $this->set('Drinks' , $Drinks);
		
		$HotDrinks = $this->Products->find()->where(['status' => 'ACTIVE', 'category_id' => 6])->all();
	    $this->set('HotDrinks' ,$HotDrinks);	

    }
	 
public function cart()
    {
		

    }
 public function checkout()
    {

    }	 	 	

}
