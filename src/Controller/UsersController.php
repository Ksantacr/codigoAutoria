<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

//public $name = 'Users';

    /*public function login(){



         if($this->request->is('post')){
             $user = $this->Auth->identify();
             if($user){

                echo "asd";
                 $this->Auth->setUser($user);
                 return $this->redirect(['Controller'=>'Users', 'action'=>'index']);
             }
             $this->Flash->error(__('Clave o usuario incorrecto'));
         }
     }*/

    public function login()
{
    if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            $this->Auth->setUser($user);
            $loggedUser = $this->request->session()->read('Auth.User');

            //print_r($loggedUser);

            if($loggedUser['roles_id'] == 2){
                //echo "Soy apostador";
                //return $this->redirect(['/' => '/' , 'action' => 'home']);
                //Router::connect('/test', array('controller' => 'pages', 'action' => 'display', index));
                $this->redirect(['/' => '/' , 'action' => 'home']);
                //$this->redirect(['Controller' => '/' , 'action' => 'home']);

            }else if($loggedUser['roles_id'] == 1){
                //echo "Soy el admin";
                return $this->redirect(['/'=>'/', 'action'=>'/', 'lista']);
                //return $this->redirect(['action' => 'index.html']);
                //$this->redirect(['Controller' => '/' , 'action' => 'home']);
            }

        }

    }
}

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Status', 'People', 'Roles']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Status', 'People', 'Roles']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $status = $this->Users->Status->find('list', ['limit' => 200]);
        $people = $this->Users->People->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'status', 'people', 'roles'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $status = $this->Users->Status->find('list', ['limit' => 200]);
        $people = $this->Users->People->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'status', 'people', 'roles'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function toIndex($id= null){

    }
     public function lista()
    {

    }
    public function matchs()
    {

    }
    public function bet()
    {

    }
    public function historial()
    {

    }
    public function perfil(){
    }

    public function retirar(){
    }

    public function recargaNotificacion()
    {

    }
    public function retirarNotificacion()
    {

    }
    public function registro()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
            return $this->redirect('/creditcards/registro');
                //return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $status = $this->Users->Status->find('list', ['limit' => 200]);
        $people = $this->Users->People->find('list', ['limit' => 200]);
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'status', 'people', 'roles'));
        $this->set('_serialize', ['user']);
    }
    public function recargar(){
    }
}
