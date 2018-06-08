<?php

namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Validation\Validator;

class MealProductsTable extends Table
{

public function initialize(array $config)
    {

      $this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
				     'created' => 'new',
   					 'modified' => 'always',
			    ]
            ]
        ]);

    }
	
public function validationDefault(Validator $validator)
{
  
	$validator->notEmpty('product_id');
	$validator->notEmpty('meal_id');
	$validator->notEmpty('quantity');
	return $validator;
	
}	
	
}



