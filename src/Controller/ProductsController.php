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


        $this->Auth->allow(['customize' ,'snacks']);
    }


 
 public function customize()
    {
		
		$this->loadModel('Meals');
		$Meals = $this->Meals->find()->where(['status' => 'ACTIVE'])->all();
	    $this->set('Meals' ,$Meals);	

    }

public function dishes()
    {
		
		$Protiens = $this->Products->find()->where(['status' => 'ACTIVE', 'category_id' => 5])->all();
	    $this->set('Protiens' ,$Protiens);
		
		$Sides = $this->Products->find()->where(['status' => 'ACTIVE', 'category_id' => 7])->all();
	    $this->set('Sides' , $Sides);
		
		$Sauces = $this->Products->find()->where(['status' => 'ACTIVE', 'category_id' => 6])->all();
	    $this->set('Sauces' ,$Sauces);	
		

    }
	
public function snacks()
    {
		

    }
	 
public function cart()
    {
		

    }
 public function checkout()
    {

    }	 	 	

}
