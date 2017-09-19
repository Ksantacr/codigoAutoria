<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Optionsxrol Controller
 *
 * @property \App\Model\Table\OptionsxrolTable $Optionsxrol
 *
 * @method \App\Model\Entity\Optionsxrol[] paginate($object = null, array $settings = [])
 */
class OptionsxrolController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles', 'Options']
        ];
        $optionsxrol = $this->paginate($this->Optionsxrol);

        $this->set(compact('optionsxrol'));
        $this->set('_serialize', ['optionsxrol']);
    }

    /**
     * View method
     *
     * @param string|null $id Optionsxrol id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $optionsxrol = $this->Optionsxrol->get($id, [
            'contain' => ['Roles', 'Options']
        ]);

        $this->set('optionsxrol', $optionsxrol);
        $this->set('_serialize', ['optionsxrol']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $optionsxrol = $this->Optionsxrol->newEntity();
        if ($this->request->is('post')) {
            $optionsxrol = $this->Optionsxrol->patchEntity($optionsxrol, $this->request->getData());
            if ($this->Optionsxrol->save($optionsxrol)) {
                $this->Flash->success(__('The optionsxrol has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The optionsxrol could not be saved. Please, try again.'));
        }
        $roles = $this->Optionsxrol->Roles->find('list', ['limit' => 200]);
        $options = $this->Optionsxrol->Options->find('list', ['limit' => 200]);
        $this->set(compact('optionsxrol', 'roles', 'options'));
        $this->set('_serialize', ['optionsxrol']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Optionsxrol id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $optionsxrol = $this->Optionsxrol->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $optionsxrol = $this->Optionsxrol->patchEntity($optionsxrol, $this->request->getData());
            if ($this->Optionsxrol->save($optionsxrol)) {
                $this->Flash->success(__('The optionsxrol has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The optionsxrol could not be saved. Please, try again.'));
        }
        $roles = $this->Optionsxrol->Roles->find('list', ['limit' => 200]);
        $options = $this->Optionsxrol->Options->find('list', ['limit' => 200]);
        $this->set(compact('optionsxrol', 'roles', 'options'));
        $this->set('_serialize', ['optionsxrol']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Optionsxrol id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $optionsxrol = $this->Optionsxrol->get($id);
        if ($this->Optionsxrol->delete($optionsxrol)) {
            $this->Flash->success(__('The optionsxrol has been deleted.'));
        } else {
            $this->Flash->error(__('The optionsxrol could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
