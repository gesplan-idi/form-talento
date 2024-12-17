<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ExperienceTypes Controller
 *
 * @property \App\Model\Table\ExperienceTypesTable $ExperienceTypes
 * @method \App\Model\Entity\ExperienceType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExperienceTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $experienceTypes = $this->paginate($this->ExperienceTypes);

        $this->set(compact('experienceTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Experience Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $experienceType = $this->ExperienceTypes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('experienceType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $experienceType = $this->ExperienceTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $experienceType = $this->ExperienceTypes->patchEntity($experienceType, $this->request->getData());
            if ($this->ExperienceTypes->save($experienceType)) {
                $this->Flash->success(__('The experience type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The experience type could not be saved. Please, try again.'));
        }
        $this->set(compact('experienceType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Experience Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $experienceType = $this->ExperienceTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $experienceType = $this->ExperienceTypes->patchEntity($experienceType, $this->request->getData());
            if ($this->ExperienceTypes->save($experienceType)) {
                $this->Flash->success(__('The experience type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The experience type could not be saved. Please, try again.'));
        }
        $this->set(compact('experienceType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Experience Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $experienceType = $this->ExperienceTypes->get($id);
        if ($this->ExperienceTypes->delete($experienceType)) {
            $this->Flash->success(__('The experience type has been deleted.'));
        } else {
            $this->Flash->error(__('The experience type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
