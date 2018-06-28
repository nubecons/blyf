<?php

namespace App\Model\Table;


use Cake\ORM\Table;

use Cake\Validation\Validator;

use Cake\Auth\DefaultPasswordHasher;

class StoresTable extends Table

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
	$validator->email('email')->notEmpty('email');
    $validator->notEmpty('name');
    $validator->notEmpty('address');
	$validator->notEmpty('opening_hours');
	$validator->notEmpty('closing_hours');
	
	 $validator->add('name', [
                    'unique' => [
                        'rule' => ['validateUnique'],
						'provider' => 'table', 
                        'message' => 'This store already exist. Please provide another one.',
                    ]
                ])
                ->notEmpty('name');
	
	
	
    return $validator;
}
	

}