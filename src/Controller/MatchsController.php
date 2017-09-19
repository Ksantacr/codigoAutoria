<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Matchs Controller
 *
 * @property \App\Model\Table\MatchsTable $Matchs
 *
 * @method \App\Model\Entity\Match[] paginate($object = null, array $settings = [])
 */
class MatchsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Teams', 'Tournaments']
        ];
        $matchs = $this->paginate($this->Matchs);

        $this->set(compact('matchs'));
        $this->set('_serialize', ['matchs']);
    }

    /**
     * View method
     *
     * @param string|null $id Match id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $match = $this->Matchs->get($id, [
            'contain' => ['Teams', 'Tournaments']
        ]);

        $this->set('match', $match);
        $this->set('_serialize', ['match']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $match = $this->Matchs->newEntity();
        if ($this->request->is('post')) {
            $match = $this->Matchs->patchEntity($match, $this->request->getData());
            if ($this->Matchs->save($match)) {
                $this->Flash->success(__('The match has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The match could not be saved. Please, try again.'));
        }
        $teams = $this->Matchs->Teams->find('list', ['limit' => 200]);
        $tournaments = $this->Matchs->Tournaments->find('list', ['limit' => 200]);
        $this->set(compact('match', 'teams', 'tournaments'));
        $this->set('_serialize', ['match']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Match id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $match = $this->Matchs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $match = $this->Matchs->patchEntity($match, $this->request->getData());
            if ($this->Matchs->save($match)) {
                $this->Flash->success(__('The match has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The match could not be saved. Please, try again.'));
        }
        $teams = $this->Matchs->Teams->find('list', ['limit' => 200]);
        $tournaments = $this->Matchs->Tournaments->find('list', ['limit' => 200]);
        $this->set(compact('match', 'teams', 'tournaments'));
        $this->set('_serialize', ['match']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Match id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $match = $this->Matchs->get($id);
        if ($this->Matchs->delete($match)) {
            $this->Flash->success(__('The match has been deleted.'));
        } else {
            $this->Flash->error(__('The match could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
