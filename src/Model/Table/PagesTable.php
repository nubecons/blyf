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
    $validator->notEmpty('url');
	$validator->notEmpty('body');

    return $validator;
}
	

}