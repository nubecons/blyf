<?php

namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Validation\Validator;
use Cake\Event\Event ;
use Cake\ORM\Entity;

class MealsTable extends Table
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
	
public function beforeSave(Event $event, Entity $entity ) {
      $entity->price = '11';
	  echo "aaaa";
	  exit;
    }
	
		
	
public function validationDefault(Validator $validator)
{
   
	 $validator->add('title', [
                    'unique' => [
                        'rule' => ['validateUnique'],
						'provider' => 'table', 
                        'message' => 'This meal already exist. Please provide another one.',
                    ]
                ])
                ->notEmpty('title');
	
    return $validator;
}	
	
}



