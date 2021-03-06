<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bets Controller
 *
 * @property \App\Model\Table\BetsTable $Bets
 *
 * @method \App\Model\Entity\Bet[] paginate($object = null, array $settings = [])
 */
class BetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Matchs', 'Teams']
        ];
        $bets = $this->paginate($this->Bets);

        $this->set(compact('bets'));
        $this->set('_serialize', ['bets']);
    }

    /**
     * View method
     *
     * @param string|null $id Bet id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bet = $this->Bets->get($id, [
            'contain' => ['Users', 'Matchs', 'Teams']
        ]);

        $this->set('bet', $bet);
        $this->set('_serialize', ['bet']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bet = $this->Bets->newEntity();
        if ($this->request->is('post')) {
            $bet = $this->Bets->patchEntity($bet, $this->request->getData());
            if ($this->Bets->save($bet)) {
                $this->Flash->success(__('The bet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bet could not be saved. Please, try again.'));
        }
        $users = $this->Bets->Users->find('list', ['limit' => 200]);
        $matchs = $this->Bets->Matchs->find('list', ['limit' => 200]);
        $teams = $this->Bets->Teams->find('list', ['limit' => 200]);
        $this->set(compact('bet', 'users', 'matchs', 'teams'));
        $this->set('_serialize', ['bet']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bet id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bet = $this->Bets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bet = $this->Bets->patchEntity($bet, $this->request->getData());
            if ($this->Bets->save($bet)) {
                $this->Flash->success(__('The bet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bet could not be saved. Please, try again.'));
        }
        $users = $this->Bets->Users->find('list', ['limit' => 200]);
        $matchs = $this->Bets->Matchs->find('list', ['limit' => 200]);
        $teams = $this->Bets->Teams->find('list', ['limit' => 200]);
        $this->set(compact('bet', 'users', 'matchs', 'teams'));
        $this->set('_serialize', ['bet']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bet id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bet = $this->Bets->get($id);
        if ($this->Bets->delete($bet)) {
            $this->Flash->success(__('The bet has been deleted.'));
        } else {
            $this->Flash->error(__('The bet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
