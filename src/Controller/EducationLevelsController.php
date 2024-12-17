<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EducationLevels Controller
 *
 * @property \App\Model\Table\EducationLevelsTable $EducationLevels
 * @method \App\Model\Entity\EducationLevel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EducationLevelsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $educationLevels = $this->paginate($this->EducationLevels);

        $this->set(compact('educationLevels'));
    }

    /**
     * View method
     *
     * @param string|null $id Education Level id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $educationLevel = $this->EducationLevels->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('educationLevel'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $educationLevel = $this->EducationLevels->newEmptyEntity();
        if ($this->request->is('post')) {
            $educationLevel = $this->EducationLevels->patchEntity($educationLevel, $this->request->getData());
            if ($this->EducationLevels->save($educationLevel)) {
                $this->Flash->success(__('The education level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The education level could not be saved. Please, try again.'));
        }
        $this->set(compact('educationLevel'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Education Level id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $educationLevel = $this->EducationLevels->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $educationLevel = $this->EducationLevels->patchEntity($educationLevel, $this->request->getData());
            if ($this->EducationLevels->save($educationLevel)) {
                $this->Flash->success(__('The education level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The education level could not be saved. Please, try again.'));
        }
        $this->set(compact('educationLevel'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Education Level id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $educationLevel = $this->EducationLevels->get($id);
        if ($this->EducationLevels->delete($educationLevel)) {
            $this->Flash->success(__('The education level has been deleted.'));
        } else {
            $this->Flash->error(__('The education level could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
