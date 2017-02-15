<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
	


	/**
	 * Index method
	 *
	 * @return \Cake\Network\Response|null
	 */
	public function index()
	{
		$this->viewBuilder()->layout('backend');
		$users = $this->paginate($this->Users);

		$this->set(compact('users'));
		$this->set('_serialize', ['users']);
	}

	/**
	 * View method
	 *
	 * @param string|null $id User id.
	 * @return \Cake\Network\Response|null
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function view($id = null)
	{
		$this->viewBuilder()->layout('backend');

		$user = $this->Users->get($id, [
			'contain' => []
		]);

		$this->set('user', $user);
		$this->set('_serialize', ['user']);
	}

	/**
	 * Add method
	 *
	 * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
	 */
	public function add()
	{
		$this->viewBuilder()->layout('backend');
		$user = $this->Users->newEntity();
		if ($this->request->is('post')) {
			$user = $this->Users->patchEntity($user, $this->request->data);
			if ($this->Users->save($user)) {
				$this->Flash->success(__('The user has been saved.'));

				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
		$this->set(compact('user'));
		$this->set('_serialize', ['user']);
	}

	/**
	 * Edit method
	 *
	 * @param string|null $id User id.
	 * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
	 * @throws \Cake\Network\Exception\NotFoundException When record not found.
	 */
	public function edit($id = null)
	{
		$this->viewBuilder()->layout('backend');

		$user = $this->Users->get($id, [
			'contain' => []
		]);
		if ($this->request->is(['patch', 'post', 'put'])) {
			$user = $this->Users->patchEntity($user, $this->request->data);
			if ($this->Users->save($user)) {
				$this->Flash->success(__('The user has been saved.'));

				return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
		$this->set(compact('user'));
		$this->set('_serialize', ['user']);
	}

	/**
	 * Delete method
	 *
	 * @param string|null $id User id.
	 * @return \Cake\Network\Response|null Redirects to index.
	 * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
	 */
	public function delete($id = null)
	{
		$this->viewBuilder()->layout('backend');
		$this->request->allowMethod(['post', 'delete']);
		$user = $this->Users->get($id);
		if ($this->Users->delete($user)) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}

		return $this->redirect(['action' => 'index']);
	}

   public function login()
	{

		if($this->request->is('post')){
			$user = $this->Auth->identify();
			if($user){
				$this->Auth->setUser($user);
				return $this->redirect($this->Auth->redirectUrl());
			} 
			$this->Flash->errors(__('Please Enter Email or Password, Try Again'));      
		}

	}
    public function logout()
      {
	return $this->redirect($this->Auth->logout());
      }
     public function dashboard()
      {
          $this->viewBuilder()->layout('dashboard');
          
      }

     public function serchKeyword()
    {
	 $search_keyword = $this->request->data['search_keyword'];
	 $conn     = ConnectionManager::get('default'); //GET THE CATEGORY DATA
  	 $stmt     = $conn->execute('SELECT * FROM users WHERE username like "%'.$search_keyword.'%"');
  	 $user_data = $stmt ->fetchAll('assoc');
	 echo json_encode($user_data); return $this->response;
    }
}
