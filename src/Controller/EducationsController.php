<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Educations Controller
 *
 * @property \App\Model\Table\EducationsTable $Educations
 * @method \App\Model\Entity\Education[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EducationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'EducationLevels'],
        ];
        $user_id = $this->request->getAttribute('user_id');
        if ($user_id) {
            $educations = $this->paginate($this->Educations->findByUserId($user_id));
        } else {
            $educations = $this->paginate($this->Educations);
        }
        // Pasamos user_id y educations a la vista
        $this->set(compact('educations', 'user_id'));
    }

    /**
     * View method
     *
     * @param string|null $id Education id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $education = $this->Educations->get($id, [
            'contain' => ['Users', 'EducationLevels'],
        ]);

        $this->set(compact('education'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $education = $this->Educations->newEmptyEntity();
        if ($this->request->is('post')) {
            $education = $this->Educations->patchEntity($education, $this->request->getData());
            if ($this->Educations->save($education)) {
                $this->Flash->success(__('The education has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The education could not be saved. Please, try again.'));
        }
        $users = $this->Educations->Users->find('list', ['limit' => 200])->all();
        $educationLevels = $this->Educations->EducationLevels->find('list', ['limit' => 200])->all();
        $user_id = $this->request->getQuery('user_id');
        $this->set(compact('education', 'users', 'educationLevels', 'user_id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Education id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $education = $this->Educations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $education = $this->Educations->patchEntity($education, $this->request->getData());
            if ($this->Educations->save($education)) {
                $this->Flash->success(__('The education has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The education could not be saved. Please, try again.'));
        }
        $users = $this->Educations->Users->find('list', ['limit' => 200])->all();
        $educationLevels = $this->Educations->EducationLevels->find('list', ['limit' => 200])->all();
        $this->set(compact('education', 'users', 'educationLevels'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Education id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $education = $this->Educations->get($id);
        if ($this->Educations->delete($education)) {
            $this->Flash->success(__('The education has been deleted.'));
        } else {
            $this->Flash->error(__('The education could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
