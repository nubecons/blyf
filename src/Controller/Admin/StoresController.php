<?php

namespace App\Controller\Admin;
use App\Controller\AppController;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class StoresController extends AppController
{

   
    public function index() {
	
		$conditions = [] ;
		$query = $this->Stores->find('all')->where($conditions);
        $this->paginate['limit'] = 25;
        $this->paginate['order'] = ['id' => 'DESC' ];
        $Stores = $this->paginate($query, array('url' => '/Stores/'));
        $this->set('Stores', $Stores);
       
	   }

 
    public function add(){
	
	  $Store = $this->Stores->newEntity();
	  
	  $this->set('Store' ,$Store);
	  if ($this->request->is('post'))
		{
			   $data = $this->request->getData();
			   $Store= $this->Stores->patchEntity($Store, $data);
			
				if ($this->Stores->save($Store))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				
				}else{
					
				if(!$Store->getErrors()){
					 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				}
				  
				}
				
			
		}
		
		$this->set('Store' ,$Store);
			
			
	}
	
	public function edit($id = null){

	  $Store = $this->Stores->get($id);
	  $this->set('Store' ,$Store);
	  
	  if ($this->request->is('post') || $this->request->is('put'))
		{
			    $data = $this->request->getData();
				$Store= $this->Stores->patchEntity($Store, $data);
			
				if ($this->Stores->save($Store))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				}else{
			    
				 if(!$Store->getErrors()){
					 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				   }	
				
				}
		}
	} 
	
	public function delete($id = null){

	  $Store = $this->Stores->get($id);
	 
	 // if ($this->request->is('post') || $this->request->is('put'))
		{
			 
				if ($this->Stores->delete($Store))
				{
					$this->Flash->success(__('Record deleted successfully.'));
					$this->redirect(['action' => 'index']);
				}else{
					
				 $this->Flash->error(__('Record could not deleted. Please try again later.'));	
				
				}
		}
	}
}
