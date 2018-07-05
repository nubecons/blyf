<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\ORM\TableRegistry;

class GetInfoHelper extends Helper
{
	
	public function initialize(array $config)
    {
       
    }


  function getUserData($id , $fields =[])
   {
    
      if (!$id)
         return '';
		 
	  $ObjUsers = TableRegistry::get('Users');
	  return $user_data = $ObjUsers->find()->select($fields)->where(['id' => $id])->first();
	
   }
   
  function getCity($id, $fields =[]){

		$ObjCities = TableRegistry::get('Cities');
	    return  $ObjCities->find()->select($fields)->where(['id' => $id])->first();

	   } 

  function getLocation($id, $fields =[]){

		$ObjLocations = TableRegistry::get('Locations');
	    return  $ObjLocations->find()->select($fields)->where(['id' => $id])->first();

	   } 


 function getMealPrice($meal_id = null){

		$ObjProducts = TableRegistry::get('Products');
		$ObjMealProducts = TableRegistry::get('MealProducts');
		
		$MealProducts = $ObjMealProducts->find()->where(['meal_id' => $meal_id])->all();
		
		$MealPrice = 0 ;
		
		foreach($MealProducts as $MealProduct){
		
			$Product = $ObjProducts->find()->select(['price'])->where(['id' => $MealProduct->product_id])->first();
		 if($Product){	
			$price = ($MealProduct->quantity * $Product->price);
			$MealPrice = $MealPrice + $price;
		  }
		 }
		
		return $MealPrice;
	 
		/* $query = $ObjProducts->find(); 
		$r = $query->select(['quantity' , 'price', 'sum' => $query->func()->sum('Products.price')])
		//->where(['Products.id' => $id])
		->toArray();
		debug($r);
		exit;*/
	
	   } 
      
}
