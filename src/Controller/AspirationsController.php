<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Aspirations Controller
 *
 * @property \App\Model\Table\AspirationsTable $Aspirations
 * @method \App\Model\Entity\Aspiration[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AspirationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $id = $this->request->getAttribute('user_id');
        if ($id) {
            $aspirations = $this->paginate($this->Aspirations->find('all')->where(['Aspirations.user_id' => $id]));
        } else {
            $aspirations = $this->paginate($this->Aspirations);
        }

        $this->set(compact('aspirations'));
    }

    /**
     * View method
     *
     * @param string|null $id Aspiration id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aspiration = $this->Aspirations->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('aspiration'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aspiration = $this->Aspirations->newEmptyEntity();
        if ($this->request->is('post')) {
            $aspiration = $this->Aspirations->patchEntity($aspiration, $this->request->getData());
            if ($this->Aspirations->save($aspiration)) {
                $this->Flash->success(__('The aspiration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aspiration could not be saved. Please, try again.'));
        }
        $users = $this->Aspirations->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('aspiration', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aspiration id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aspiration = $this->Aspirations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aspiration = $this->Aspirations->patchEntity($aspiration, $this->request->getData());
            if ($this->Aspirations->save($aspiration)) {
                $this->Flash->success(__('The aspiration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aspiration could not be saved. Please, try again.'));
        }
        $users = $this->Aspirations->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('aspiration', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aspiration id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aspiration = $this->Aspirations->get($id);
        if ($this->Aspirations->delete($aspiration)) {
            $this->Flash->success(__('The aspiration has been deleted.'));
        } else {
            $this->Flash->error(__('The aspiration could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
