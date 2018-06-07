<?php

namespace App\Controller\Admin;
use App\Controller\AppController;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class AllergensController extends AppController
{
    public function initialize() {

        parent::initialize();

        $this->allergens_file_path = WWW_ROOT . 'img' . DS . 'Allergens' . DS;
         $this->loadComponent('Upload');
    }

    public function index($id = null) {
    
    if($id){
   $conditions = ['parent_id' => $id] ;
    }else{
    $conditions = ['parent_id' => 0] ; 
     }
	$query = $this->Allergens->find('all')->where($conditions);
        $this->paginate['limit'] = 25;
        $this->paginate['order'] = ['created' => 'ASC' ];
        $Allergens = $this->paginate($query, array('url' => '/Allergens/'));
        $this->set('Allergens', $Allergens);
       
	   }
 
    public function add(){
        
	  $Allergy = $this->Allergens->newEntity();
	  
	  $this->set('Allergy' ,$Allergy);
	  if ($this->request->is('post'))
		{
               if (!empty($this->request->data['image_file']['name'])) {
                $result = $this->Upload->upload($this->request->data['image_file'], $this->allergens_file_path, null, null, null);

                if (count($this->Upload->errors) > 0) {
                    unset($this->request->data['image_file']);
                } else {
                    $this->request->data['image'] = $this->Upload->result;
                }
            }
			   $data = $this->request->data;
			   $Allergy= $this->Allergens->patchEntity($Allergy, $this->request->data);
			
				if ($this->Allergens->save($Allergy))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				
				}else{
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				  $this->set('errors', $Allergy->errors());
				}
		}
		
		$this->set('Allergy' ,$Allergy);
			
			
	}
	
	public function edit($id = null){
        $MainAllergens = $this->Allergens->find('list', ['keyField' => 'id', 'valueField' => 'title'])->where(['status' => 'ACTIVE', 'parent_id' => 0])->toArray();
        $this->set('MainAllergens', $MainAllergens);
	  $Allergy = $this->Allergens->get($id);
	  $this->set('Allergy' ,$Allergy);
	  
	  if ($this->request->is('post') || $this->request->is('put'))
		{
			 $data = $this->request->data;
				$Allergy= $this->Allergens->patchEntity($Allergy, $this->request->data);
			
				if ($this->Allergens->save($Allergy))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				}else{
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				
				}
		}
	} 
	
	public function delete($id = null){

	  $Allergy = $this->Allergens->get($id);
	 
	 // if ($this->request->is('post') || $this->request->is('put'))
		{
			 
				if ($this->Allergens->delete($Allergy))
				{
					$this->Flash->success(__('Record deleted successfully.'));
					$this->redirect(['action' => 'index']);
				}else{
					
				 $this->Flash->error(__('Record could not deleted. Please try again later.'));	
				
				}
		}
	}
}
