<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Professions Controller
 *
 * @property \App\Model\Table\ProfessionsTable $Professions
 * @method \App\Model\Entity\Profession[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfessionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $professions = $this->paginate($this->Professions);

        $this->set(compact('professions'));
    }

    /**
     * View method
     *
     * @param string|null $id Profession id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profession = $this->Professions->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('profession'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profession = $this->Professions->newEmptyEntity();
        if ($this->request->is('post')) {
            $profession = $this->Professions->patchEntity($profession, $this->request->getData());
            if ($this->Professions->save($profession)) {
                $this->Flash->success(__('The profession has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profession could not be saved. Please, try again.'));
        }
        $this->set(compact('profession'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Profession id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profession = $this->Professions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profession = $this->Professions->patchEntity($profession, $this->request->getData());
            if ($this->Professions->save($profession)) {
                $this->Flash->success(__('The profession has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profession could not be saved. Please, try again.'));
        }
        $this->set(compact('profession'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Profession id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profession = $this->Professions->get($id);
        if ($this->Professions->delete($profession)) {
            $this->Flash->success(__('The profession has been deleted.'));
        } else {
            $this->Flash->error(__('The profession could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
