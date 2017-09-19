<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Creditcards Controller
 *
 * @property \App\Model\Table\CreditcardsTable $Creditcards
 *
 * @method \App\Model\Entity\Creditcard[] paginate($object = null, array $settings = [])
 */
class CreditcardsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Banks']
        ];
        $creditcards = $this->paginate($this->Creditcards);

        $this->set(compact('creditcards'));
        $this->set('_serialize', ['creditcards']);
    }

    /**
     * View method
     *
     * @param string|null $id Creditcard id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $creditcard = $this->Creditcards->get($id, [
            'contain' => ['Banks']
        ]);

        $this->set('creditcard', $creditcard);
        $this->set('_serialize', ['creditcard']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $creditcard = $this->Creditcards->newEntity();
        if ($this->request->is('post')) {
            $creditcard = $this->Creditcards->patchEntity($creditcard, $this->request->getData());
            if ($this->Creditcards->save($creditcard)) {
                $this->Flash->success(__('The creditcard has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The creditcard could not be saved. Please, try again.'));
        }
        $banks = $this->Creditcards->Banks->find('list', ['limit' => 200]);
        $this->set(compact('creditcard', 'banks'));
        $this->set('_serialize', ['creditcard']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Creditcard id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $creditcard = $this->Creditcards->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $creditcard = $this->Creditcards->patchEntity($creditcard, $this->request->getData());
            if ($this->Creditcards->save($creditcard)) {
                $this->Flash->success(__('The creditcard has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The creditcard could not be saved. Please, try again.'));
        }
        $banks = $this->Creditcards->Banks->find('list', ['limit' => 200]);
        $this->set(compact('creditcard', 'banks'));
        $this->set('_serialize', ['creditcard']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Creditcard id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $creditcard = $this->Creditcards->get($id);
        if ($this->Creditcards->delete($creditcard)) {
            $this->Flash->success(__('The creditcard has been deleted.'));
        } else {
            $this->Flash->error(__('The creditcard could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function registro()
    {
        $creditcard = $this->Creditcards->newEntity();
        if ($this->request->is('post')) {
            $creditcard = $this->Creditcards->patchEntity($creditcard, $this->request->getData());
            if ($this->Creditcards->save($creditcard)) {
                $this->Flash->success(__('Se ha registrado la tarjeta de crédito.'));
                return $this->redirect('/wallets/registro');
                //return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The creditcard could not be saved. Please, try again.'));
        }
        $banks = $this->Creditcards->Banks->find('list', ['limit' => 200]);
        $this->set(compact('creditcard', 'banks'));
        $this->set('_serialize', ['creditcard']);
    }
}
