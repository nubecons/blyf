<?php

// src/Controller/AppController.php



namespace App\Controller;
use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{

    public $sUser = [];
	public $SiteInfo = [];
    
	public function initialize()
    {
		$this->Session = $this->getRequest()->getSession();
		//$this->addBehavior('Timestamp');
        $this->loadComponent('Flash',['clear' => true]);
		$this->loadComponent('Site');
		
		$this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Pages',
                'action' => 'display',
                'home'

            ],

            'logoutRedirect' => [
                'controller' => 'Pages',
                'action' => 'display',
                'home'

            ],

			'authenticate' => [
				'Form' => [
					'fields' => ['username' => 'email', 'password' => 'password'],
					'finder' => 'auth'
				]
        	]
        ]);	
       
    }



    public function beforeFilter(Event $event)
    {
		
		$this->Session =  $this->getRequest()->getSession();

		$sUser = $this->Auth->user();
		$this->sUser = $sUser ;

		if($this->getRequest()->getParam('prefix') == 'admin' ){ 
   
			if($sUser && $sUser['group_id'] != '1' ){

				return $this->redirect('/');
			}

			$this->viewBuilder()->setLayout('admin');
			
		}		
		
		$this->set('sUser' ,$sUser);
	
		
		//if($this->Session->check('SiteInfo'))
		{
	
			$SiteInfo = $this->Session->read('SiteInfo');
			
	//}else{
			
			$this->loadModel('SiteInformations');
			$SiteInfo = $this->SiteInformations->find('list', ['keyField' => 'type', 'valueField' => 'value'])->toArray();
			
			$this->Session->write('SiteInfo' , $SiteInfo);
		
		 }
		
		
		$this->set('SiteInfo', $SiteInfo );
		$this->SiteInfo = $SiteInfo;
		$this->set('title' ,$SiteInfo['site-title']);

	}

	


	

	
  }
