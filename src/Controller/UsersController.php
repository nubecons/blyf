<?php
    
	namespace App\Controller;
   
    use App\Controller\AppController;

	//For EMail Sending
	use Cake\Mailer\AbstractTransport;
	use Cake\Mailer\Email;
	use Cake\Network\Exception\SocketException;
	use Cake\Network\Http\Client;
	use Cake\Utility\Hash;
   //For Password Hashing
	use Cake\Auth\DefaultPasswordHasher;
	use Cake\Routing\Router;


	use Cake\Event\Event;

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
		
		$this->Auth->allow(['signup']);
	
	}
	
	public function login() {

      
        if ($this->sUser) {
			 return $this->redirect('/');
        }

        if ($this->request->is('post')) {

            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                if ($user['group_id'] == '1') {
					 return $this->redirect('/admin/users/dashboard');
                }

                return $this->redirect('/users/dashboard');
            }

            $this->Flash->error(__('Sorry, we did not recognize that email or password'));
        }
    }

    public function logout() {

        session_unset();
        session_destroy();
		//$this->Flash->success(__('Good Bye!'));
        return $this->redirect('/');
    }
	
	function dashboard(){
	}
	

	
 public function signup() {

        if ($this->sUser) {

            return $this->redirect('/');
        }


        $user = $this->Users->newEntity();
		$this->set('user', $user);
        if ($this->request->is('post')) {
			
			/*
			
            $User_email = $this->Users->find()->where(['email' => $data['email']])->first();

            if ($User_email) {

                $this->Flash->error(__('This email already registered.'));
            } else*/ {
 				
				$data = $this->request->getData();
 
                $user->group_id = '2';

                $user->confirm_code = md5(time());

                $user->password = $data['new_password'];

                //$hasher = new DefaultPasswordHasher();
                //$hasher->hash($user->password);

                $data['password_decoded'] = $data['new_password'];



                $user = $this->Users->patchEntity($user, $data);
				$this->set('user', $user);
				 
                if ($this->Users->save($user)) {


                   // $this->Auth->setUser($user);

				try {
                   $email = new Email();
                    $email->setTemplate('confirmation')
                            ->setEmailFormat('html')
                            ->setViewVars(['user' => $user, 'site_name' => $this->SiteInfo['site-name']])
                            ->setFrom([$this->SiteInfo['noreply_email']])
                            ->setTo($user['email']) //$user['email'];
                            ->setSubject($this->SiteInfo['site-name'] . '- Account Created')
                            ->send();
					}
					//catch exception
					catch(Exception $e) {
						// $e->getMessage();
					}

                    $this->Flash->success(__('Your Account has been created successfully. You can login here'));

                    return $this->redirect(['controller' => 'users', 'action' => 'login']);
                } else {

                  //  $this->Flash->error(sprintf(__('The %s could not be saved. Please, try again.', true), 'user'));
                }
            }
        }

        $this->set('user', $user);
    }
	
	
 public function profile() {

        $user = $this->Users->get($this->sUser['id']);
        $this->set('user', $user);

        
        if ($this->request->is(['post', 'put'])) {
            
			 $data = $this->request->getData();
            $User_email = $this->Users->find()->where([ 'id !=' => $this->sUser['id'], 'email' => $data['email']])->first();

            if ($User_email) {

                $this->Flash->error(__('This email already registered.'));
                return;
            }



            if (!empty($data['image_file']['name'])) {
                $result = $this->Upload->upload($data['image_file'], $this->profile_file_path, null, null, $this->allowedImages);

                if (count($this->Upload->errors) > 0) {
                    
					 unset($data['image_file']);
                     $this->Flash->error(__($this->Upload->errors[0]));	
					return;
					
                } else {
                    $data['image'] = $this->Upload->result;
                }
            }

            $user = $this->Users->patchEntity($user, $data);
            if ($this->Users->save($user)) {

                $this->Flash->success(__('Profile updated successfully.'));
				$this->Auth->setUser($user);
                return $this->redirect(array('controller' => 'Users', 'action' => 'profile'));

            } else {
				
                $this->Flash->error(__('Changes could not saved.'));
                
            }
        }
    }
	
  public function changePassword() {

        $user = $this->Users->get($this->sUser['id']);
				 
         if ($this->request->is(['post', 'put'])) {
            
			$data = $this->request->getData();
            
			$user = $this->Users->patchEntity($user, [

                'old_password' => $data['old_password'],
                'password' => $data['new_password'],
                'new_password' => $data['new_password'],
                'confirm_password' => $data['confirm_password']
                    ], ['validate' => 'password']
            );

            if ($this->Users->save($user)) {
				
                $this->Flash->success(__('The password is successfully changed'));
				
				$message = 'Hi '.$user->first_name.',';
				$message .="<br><br>";
				$message .="You've successfully changed your password.";
				$message .="<br><br>";
				$message .="Thanks,<br>".$this->SiteInfo['site-name'].' Team';
			
			try {
				$email = new Email();
				$r = $email->setTemplate('common')
				->setEmailFormat('html')
				->setViewVars(['message' => $message])
				->setFrom([$this->SiteInfo['support_email']])
				->setTo($user['email']) //$user['email'];
				->setSubject('Your password was successfully changed')
				->send();	
				}
				//catch exception
				catch(Exception $e) {
					// $e->getMessage();
				}
				
                return $this->redirect(array('controller' => '/Users', 'action' => 'changePassword'));
            } else {

                
            }
        }else{
			$user->new_password = '';
			}

        $this->set('user', $user);
    }
}