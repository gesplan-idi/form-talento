<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Skills Controller
 *
 * @property \App\Model\Table\SkillsTable $Skills
 * @method \App\Model\Entity\Skill[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SkillsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'SkillCategories'],
        ];
        $user_id = $this->request->getAttribute('user_id');
        if ($user_id) {
            $skills = $this->paginate($this->Skills->findByUserId($user_id));
        } else {
            $skills = $this->paginate($this->Skills);
        }

        $this->set(compact('skills', 'user_id'));
    }

    /**
     * View method
     *
     * @param string|null $id Skill id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $skill = $this->Skills->get($id, [
            'contain' => ['Users', 'SkillCategories'],
        ]);

        $this->set(compact('skill'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $skill = $this->Skills->newEmptyEntity();
        if ($this->request->is('post')) {
            $skill = $this->Skills->patchEntity($skill, $this->request->getData());
            if ($this->Skills->save($skill)) {
                $this->Flash->success(__('The skill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The skill could not be saved. Please, try again.'));
        }
        $users = $this->Skills->Users->find('list', ['limit' => 200])->all();
        $skillCategories = $this->Skills->SkillCategories->find('list', ['limit' => 200])->all();
        $user_id = $this->request->getQuery('user_id');
        $this->set(compact('skill', 'users', 'skillCategories', 'user_id'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Skill id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $skill = $this->Skills->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $skill = $this->Skills->patchEntity($skill, $this->request->getData());
            if ($this->Skills->save($skill)) {
                $this->Flash->success(__('The skill has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The skill could not be saved. Please, try again.'));
        }
        $users = $this->Skills->Users->find('list', ['limit' => 200])->all();
        $skillCategories = $this->Skills->SkillCategories->find('list', ['limit' => 200])->all();
        $this->set(compact('skill', 'users', 'skillCategories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Skill id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $skill = $this->Skills->get($id);
        if ($this->Skills->delete($skill)) {
            $this->Flash->success(__('The skill has been deleted.'));
        } else {
            $this->Flash->error(__('The skill could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
