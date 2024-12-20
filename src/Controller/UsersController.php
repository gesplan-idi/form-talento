<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Positions', 'Professions', 'Nationalities', 'Departments', 'Categories', 'Contracts', 'Workplaces'],
        ];
        $id = $this->request->getAttribute('user_id');
        if ($id) {
            $users = $this->paginate($this->Users->findById($id));
        } else {
            $users = $this->paginate($this->Users);
        }

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Positions', 'Professions', 'Nationalities', 'Departments', 'Categories', 'Contracts', 'Workplaces', 'Aspirations', 'Educations', 'Experiences', 'Languages', 'Skills'],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $positions = $this->Users->Positions->find('list', ['limit' => 200])->all();
        $professions = $this->Users->Professions->find('list', ['limit' => 200])->all();
        $nationalities = $this->Users->Nationalities->find('list', ['limit' => 200])->all();
        $departments = $this->Users->Departments->find('list', ['limit' => 200])->all();
        $categories = $this->Users->Categories->find('list', ['limit' => 200])->all();
        $contracts = $this->Users->Contracts->find('list', ['limit' => 200])->all();
        $workplaces = $this->Users->Workplaces->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'positions', 'professions', 'nationalities', 'departments', 'categories', 'contracts', 'workplaces'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $positions = $this->Users->Positions->find('list', ['limit' => 200])->all();
        $professions = $this->Users->Professions->find('list', ['limit' => 200])->all();
        $nationalities = $this->Users->Nationalities->find('list', ['limit' => 200])->all();
        $departments = $this->Users->Departments->find('list', ['limit' => 200])->all();
        $categories = $this->Users->Categories->find('list', ['limit' => 200])->all();
        $contracts = $this->Users->Contracts->find('list', ['limit' => 200])->all();
        $workplaces = $this->Users->Workplaces->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'positions', 'professions', 'nationalities', 'departments', 'categories', 'contracts', 'workplaces'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
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
}
