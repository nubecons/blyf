<?php
    namespace App\Controller\Admin;
    use App\Controller\AppController;

	use Cake\Event\Event;
	use App\Utility\Lists;

    use Cake\Datasource\ConnectionManager;

   class UsersController extends AppController
	{

	public function initialize()
	{
		parent::initialize();
	
	}
	
	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
	}
	
	public function login() {

        $this->viewBuilder()->setLayout('admin_simple');     

        if ($this->sUser) {
			
			 return $this->redirect(['controller' =>'Users' , 'action'=>'dashboard']);

        }

        if ($this->request->is('post')) {

            $user = $this->Auth->identify();

            if ($user) {
                $this->Auth->setUser($user);
                if ($user['group_id'] == '1') {
					 return $this->redirect('/admin/users/dashboard');
                     //return $this->redirect('/admin');
                }

                return $this->redirect('/');
            }

            $this->Flash->error(__('Sorry, we did not recognize that email or password'));
        }
    }

    public function logout() {

        session_unset();
        session_destroy();
		$this->Flash->success(__('Good Bye!'));
        return $this->redirect('/admin/users/login');
    }
	
	function dashboard(){
	}
	
	public function index()
	{
		
	}
	public function add()
	{
		
	}
	public function edit($id = null)
	{
		
	}
	
	  public function profile() {


        $user = $this->Users->get($this->sUser['id']);
        $this->set('user', $user);

        
        if ($this->request->is(['post', 'put'])) {

            $User_email = $this->Users->find()->where([ 'id !=' => $this->sUser['id'], 'email' => $this->request->data['email']])->first();

            if ($User_email) {

                $this->Flash->error(__('This email already registered.'));
                return;
            }



            if (!empty($this->request->data['image_file']['name'])) {
                $result = $this->Upload->upload($this->request->data['image_file'], $this->profile_file_path, null, null, $this->allowedImages);

                if (count($this->Upload->errors) > 0) {
                    unset($this->request->data['image_file']);
                } else {
                    $this->request->data['image'] = $this->Upload->result;
                }
            }

            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {

                $this->Flash->success(__('Profile updated successfully.'));

                return $this->redirect(array('controller' => 'Users', 'action' => 'profile'));

            } else {
				
                $this->Flash->error(__('Changes could not saved.'));
                $this->set('errors', $user->errors());
            }
        }
    }
	
	public function changePassword($userID)
	{
	
	
			$this->set('title', 'Change User Password');
			
			$user =$this->Users->get($userID);
			$this->set('user', $user );
			
			
			if (!$user) { error('Invalid user ID specified', ERROR_INVALID_OR_NONEXISTENT_ITEM); exit; }
			
			
			
			$error = '';
			if (!empty($this->request->data)) {
			if (empty($this->request->data['new_password']))
			
			$error = 'Please enter a new password';
			
			else if (empty($this->request->data['confirm_password']))
			
			$error = 'Please enter the new password twice';
			
			else if ($this->request->data['new_password'] != $this->request->data['confirm_password'])
			
			$error = 'The new password must be entered the same in both password fields';
			
			if($error == ''){
			
			
			
			$user = $this->Users->patchEntity($user, [
			
			'password'      => $this->request->data['new_password'],
			
			'new_password'     => $this->request->data['new_password'],
			
			'password_confirm' => $this->request->data['confirm_password'],
			
			'confirm_password' => $this->request->data['confirm_password']
			
			
			
			],
			
			
			
			['validate' => 'password']
			
			
			
			);
			
			
			
			if ($this->Users->save($user)) {
			
			
			
			$this->Flash->success('The password is successfully changed',['key' => 'message']);
			
			
			
			return $this->redirect(array('controller'=>'/Users', 'action'=>'changePassword',$userID));
			
			
			
			
			
			
			
			} else {
			
			
			
			$error = 'Sorry, there was a problem updating the user\'s password';
			
			
			
			//$this->set('errors',$user->errors());		
			
			
			
			}
			
			
	
	}
	
	
	
	}
	
	
	
	
	
	
	
	
	
	
	
	$this->set('error',$error);
	
	
	
	$this->set('user',$user);
	
	
	
	
	
	
	
	}



}