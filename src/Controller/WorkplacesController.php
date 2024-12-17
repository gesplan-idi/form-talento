<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Workplaces Controller
 *
 * @property \App\Model\Table\WorkplacesTable $Workplaces
 * @method \App\Model\Entity\Workplace[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WorkplacesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $workplaces = $this->paginate($this->Workplaces);

        $this->set(compact('workplaces'));
    }

    /**
     * View method
     *
     * @param string|null $id Workplace id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $workplace = $this->Workplaces->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('workplace'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $workplace = $this->Workplaces->newEmptyEntity();
        if ($this->request->is('post')) {
            $workplace = $this->Workplaces->patchEntity($workplace, $this->request->getData());
            if ($this->Workplaces->save($workplace)) {
                $this->Flash->success(__('The workplace has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The workplace could not be saved. Please, try again.'));
        }
        $this->set(compact('workplace'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Workplace id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $workplace = $this->Workplaces->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $workplace = $this->Workplaces->patchEntity($workplace, $this->request->getData());
            if ($this->Workplaces->save($workplace)) {
                $this->Flash->success(__('The workplace has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The workplace could not be saved. Please, try again.'));
        }
        $this->set(compact('workplace'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Workplace id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $workplace = $this->Workplaces->get($id);
        if ($this->Workplaces->delete($workplace)) {
            $this->Flash->success(__('The workplace has been deleted.'));
        } else {
            $this->Flash->error(__('The workplace could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
