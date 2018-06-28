<?php

namespace App\Model\Table;


use Cake\ORM\Table;

use Cake\Validation\Validator;

use Cake\Auth\DefaultPasswordHasher;

class PagesTable extends Table

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
    $validator->notEmpty('headline');
    
	$validator->notEmpty('body');
	
	$validator->add('headline', [
                    'unique' => [
                        'rule' => ['validateUnique'],
						'provider' => 'table', 
                        'message' => 'This page already exist. Please provide another one.',
                    ]
                ])
                ->notEmpty('headline');
				
	 $validator->add('url', [
                    'unique' => [
                        'rule' => ['validateUnique'],
						'provider' => 'table', 
                        'message' => 'This url already exist. Please provide another one.',
                    ]
                ])
                ->notEmpty('url');
	

    return $validator;
}
	

}