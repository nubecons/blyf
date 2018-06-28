<?php

// src/Model/Table/UsersTable.php

namespace App\Model\Table;



use Cake\ORM\Table;

use Cake\Validation\Validator;



class CategoriesTable extends Table

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
    
	 $validator->add('title', [
                    'unique' => [
                        'rule' => ['validateUnique'],
						'provider' => 'table', 
                        'message' => 'This category already exist. Please provide another one.',
                    ]
                ])
                ->notEmpty('title');
	
	
    return $validator;
}	
	
}



