<?php

// src/Model/Table/UsersTable.php

namespace App\Model\Table;



use Cake\ORM\Table;

use Cake\Validation\Validator;



class DishesTable extends Table

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
    $validator->notEmpty('blog_category_id');
	$validator->notEmpty('title');
	$validator->notEmpty('post');
	
    return $validator;
}	
	
}



