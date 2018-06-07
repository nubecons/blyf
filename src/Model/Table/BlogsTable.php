<?php

// src/Model/Table/UsersTable.php

namespace App\Model\Table;



use Cake\ORM\Table;

use Cake\Validation\Validator;



class BlogsTable extends Table

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
}



