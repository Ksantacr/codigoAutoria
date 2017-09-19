<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Wallets Controller
 *
 * @property \App\Model\Table\WalletsTable $Wallets
 *
 * @method \App\Model\Entity\Wallet[] paginate($object = null, array $settings = [])
 */
class WalletsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Creditcards']
        ];
        $wallets = $this->paginate($this->Wallets);

        $this->set(compact('wallets'));
        $this->set('_serialize', ['wallets']);
    }

    /**
     * View method
     *
     * @param string|null $id Wallet id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wallet = $this->Wallets->get($id, [
            'contain' => ['Users', 'Creditcards']
        ]);

        $this->set('wallet', $wallet);
        $this->set('_serialize', ['wallet']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wallet = $this->Wallets->newEntity();
        if ($this->request->is('post')) {
            $wallet = $this->Wallets->patchEntity($wallet, $this->request->getData());
            if ($this->Wallets->save($wallet)) {
                $this->Flash->success(__('The wallet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wallet could not be saved. Please, try again.'));
        }
        $users = $this->Wallets->Users->find('list', ['limit' => 200]);
        $creditcards = $this->Wallets->Creditcards->find('list', ['limit' => 200]);
        $this->set(compact('wallet', 'users', 'creditcards'));
        $this->set('_serialize', ['wallet']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wallet id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wallet = $this->Wallets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wallet = $this->Wallets->patchEntity($wallet, $this->request->getData());
            if ($this->Wallets->save($wallet)) {
                $this->Flash->success(__('The wallet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wallet could not be saved. Please, try again.'));
        }
        $users = $this->Wallets->Users->find('list', ['limit' => 200]);
        $creditcards = $this->Wallets->Creditcards->find('list', ['limit' => 200]);
        $this->set(compact('wallet', 'users', 'creditcards'));
        $this->set('_serialize', ['wallet']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wallet id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wallet = $this->Wallets->get($id);
        if ($this->Wallets->delete($wallet)) {
            $this->Flash->success(__('The wallet has been deleted.'));
        } else {
            $this->Flash->error(__('The wallet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function registro()
    {
        $wallet = $this->Wallets->newEntity();
        if ($this->request->is('post')) {
            $wallet = $this->Wallets->patchEntity($wallet, $this->request->getData());
            if ($this->Wallets->save($wallet)) {
                $this->Flash->success(__('The wallet has been saved.'));
                return $this->redirect('/users/home');
                //return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wallet could not be saved. Please, try again.'));
        }
        $users = $this->Wallets->Users->find('list', ['limit' => 200]);
        $creditcards = $this->Wallets->Creditcards->find('list', ['limit' => 200]);
        $this->set(compact('wallet', 'users', 'creditcards'));
        $this->set('_serialize', ['wallet']);
    }
}
