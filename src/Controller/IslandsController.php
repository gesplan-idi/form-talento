<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Islands Controller
 *
 * @property \App\Model\Table\IslandsTable $Islands
 * @method \App\Model\Entity\Island[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IslandsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $islands = $this->paginate($this->Islands);

        $this->set(compact('islands'));
    }

    /**
     * View method
     *
     * @param string|null $id Island id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $island = $this->Islands->get($id, [
            'contain' => ['Aspirations'],
        ]);

        $this->set(compact('island'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $island = $this->Islands->newEmptyEntity();
        if ($this->request->is('post')) {
            $island = $this->Islands->patchEntity($island, $this->request->getData());
            if ($this->Islands->save($island)) {
                $this->Flash->success(__('The island has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The island could not be saved. Please, try again.'));
        }
        $this->set(compact('island'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Island id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $island = $this->Islands->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $island = $this->Islands->patchEntity($island, $this->request->getData());
            if ($this->Islands->save($island)) {
                $this->Flash->success(__('The island has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The island could not be saved. Please, try again.'));
        }
        $this->set(compact('island'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Island id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $island = $this->Islands->get($id);
        if ($this->Islands->delete($island)) {
            $this->Flash->success(__('The island has been deleted.'));
        } else {
            $this->Flash->error(__('The island could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
