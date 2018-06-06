<?php

namespace App\Controller\Admin;
use App\Controller\AppController;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class PagesController extends AppController
{

   
    public function index() {
	
		$conditions = [] ;
		$query = $this->Pages->find('all')->where($conditions);
        $this->paginate['limit'] = 25;
        $this->paginate['order'] = ['created' => 'ASC' ];
        $Pages = $this->paginate($query, array('url' => '/Pages/'));
        $this->set('Pages', $Pages);
       
	   }

 
    public function add(){
	
	  $Page = $this->Pages->newEntity();
	  
	  $this->set('Page' ,$Page);
	  if ($this->request->is('post'))
		{
			   $data = $this->request->data;
			   $Page= $this->Pages->patchEntity($Page, $this->request->data);
			
				if ($this->Pages->save($Page))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				
				}else{
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				  $this->set('errors', $Page->errors());
				}
		}
		
		$this->set('Page' ,$Page);
			
			
	}
	
	public function edit($id = null){

	  $Page = $this->Pages->get($id);
	  $this->set('Page' ,$Page);
	  
	  if ($this->request->is('post') || $this->request->is('put'))
		{
			 $data = $this->request->data;
				$Page= $this->Pages->patchEntity($Page, $this->request->data);
			
				if ($this->Pages->save($Page))
				{
					$this->Flash->success(__('Record saved successfully.'));
					$this->redirect(['action' => 'index']);
				}else{
					
				 $this->Flash->error(__('Record could not saved. Please try again later.'));	
				
				}
		}
	} 
	
	public function delete($id = null){

	  $Page = $this->Pages->get($id);
	 
	 // if ($this->request->is('post') || $this->request->is('put'))
		{
			 
				if ($this->Pages->delete($Page))
				{
					$this->Flash->success(__('Record deleted successfully.'));
					$this->redirect(['action' => 'index']);
				}else{
					
				 $this->Flash->error(__('Record could not deleted. Please try again later.'));	
				
				}
		}
	}
}
