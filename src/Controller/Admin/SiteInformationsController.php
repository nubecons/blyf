<?php
//namespace App\Controller;
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class SiteInformationsController extends AppController
{
	/*public $paginate = [
        'limit' => 5
    ];*/
	public function initialize()
	{
		parent::initialize();
	}

	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);

		//Change the layout of the entire controller
		$this->viewBuilder()->layout('admin_main');
	}

    public function index()
    {
		$this->Global->setURI('SiteInformations');
		$query = $this->SiteInformations->find('all');
		if (!$this->Global->chkIfSort()){
			//Set default sort order
			$query->order(['SiteInformations.id' => 'DESC']);
		}
		$siteInformations = $this->paginate($query, array('url' => '/SiteInformations/'));
        $this->set('siteInformations', $siteInformations);
    }

    public function add()
    {
        $siteInformation = $this->SiteInformations->newEntity();
        if ($this->request->is('post'))
		{
            $siteInformation = $this->SiteInformations->patchEntity($siteInformation, $this->request->data);
            if ($this->SiteInformations->save($siteInformation)) {
                $this->Flash->success(__('Site Information has been saved.'));
				$this->redirect($this->Global->getURI('SiteInformations'));
            }
			if($siteInformation->errors()){
				$this->Global->processErrors($siteInformation->errors(), $this->Flash);
            }
        }
        $this->set('siteInformation', $siteInformation);
    }

	public function edit($id = null)
	{
		$siteInformation = $this->SiteInformations->get($id);
		if ($this->request->is(['post', 'put']))
		{
			$this->SiteInformations->patchEntity($siteInformation, $this->request->data);
			if ($this->SiteInformations->save($siteInformation)) {
				$this->Flash->success(__('Site Information has been updated.'));
				$this->redirect($this->Global->getURI('SiteInformations'));
			}
			if($siteInformation->errors()){
				$this->Global->processErrors($siteInformation->errors(), $this->Flash);
            }
		}
		$this->set('id', $id);
		$this->set('siteInformation', $siteInformation);
	}

	public function view($id)
    {
		$siteInformation = $this->SiteInformations->get($id);
        $this->set(compact('siteInformation'));
    }

	public function update()
    {
		if ($this->request->is('post'))
		{
			/*echo '<pre>';
			print_r($this->request->data);
			exit;*/
			$entities = $this->SiteInformations->newEntities($this->request->data('SiteInformation'));
			foreach ($entities as $entity){
				$this->SiteInformations->save($entity);
			}
			$this->Flash->success(__('The Site Information has been saved.'));
			return $this->redirect(array('controller'=>'/SiteInformations', 'action'=>'update'));
		}
		$SiteInformations = $this->SiteInformations->find('all')->order(['field_type' => 'asc']);
        $this->set(compact('SiteInformations'));
    }

	public function delete($id)
	{
		$this->request->allowMethod(['post', 'delete']);
		$siteInformation = $this->SiteInformations->get($id);
		if ($this->SiteInformations->delete($siteInformation)) {
			$this->Flash->success(__('Site Information has been deleted.', h($id)));
			$this->redirect($this->Global->getURI('SiteInformations'));
		}
	}

}