<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Recharges Controller
 *
 * @property \App\Model\Table\RechargesTable $Recharges
 *
 * @method \App\Model\Entity\Recharge[] paginate($object = null, array $settings = [])
 */
class RechargesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Wallets']
        ];
        $recharges = $this->paginate($this->Recharges);

        $this->set(compact('recharges'));
        $this->set('_serialize', ['recharges']);
    }

    /**
     * View method
     *
     * @param string|null $id Recharge id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recharge = $this->Recharges->get($id, [
            'contain' => ['Wallets']
        ]);

        $this->set('recharge', $recharge);
        $this->set('_serialize', ['recharge']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recharge = $this->Recharges->newEntity();
        if ($this->request->is('post')) {
            $recharge = $this->Recharges->patchEntity($recharge, $this->request->getData());
            if ($this->Recharges->save($recharge)) {
                $this->Flash->success(__('The recharge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recharge could not be saved. Please, try again.'));
        }
        $wallets = $this->Recharges->Wallets->find('list', ['limit' => 200]);
        $this->set(compact('recharge', 'wallets'));
        $this->set('_serialize', ['recharge']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Recharge id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recharge = $this->Recharges->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recharge = $this->Recharges->patchEntity($recharge, $this->request->getData());
            if ($this->Recharges->save($recharge)) {
                $this->Flash->success(__('The recharge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recharge could not be saved. Please, try again.'));
        }
        $wallets = $this->Recharges->Wallets->find('list', ['limit' => 200]);
        $this->set(compact('recharge', 'wallets'));
        $this->set('_serialize', ['recharge']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Recharge id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recharge = $this->Recharges->get($id);
        if ($this->Recharges->delete($recharge)) {
            $this->Flash->success(__('The recharge has been deleted.'));
        } else {
            $this->Flash->error(__('The recharge could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
