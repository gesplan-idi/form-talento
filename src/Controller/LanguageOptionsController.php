<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LanguageOptions Controller
 *
 * @property \App\Model\Table\LanguageOptionsTable $LanguageOptions
 * @method \App\Model\Entity\LanguageOption[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LanguageOptionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $languageOptions = $this->paginate($this->LanguageOptions);

        $this->set(compact('languageOptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Language Option id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $languageOption = $this->LanguageOptions->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('languageOption'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $languageOption = $this->LanguageOptions->newEmptyEntity();
        if ($this->request->is('post')) {
            $languageOption = $this->LanguageOptions->patchEntity($languageOption, $this->request->getData());
            if ($this->LanguageOptions->save($languageOption)) {
                $this->Flash->success(__('The language option has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The language option could not be saved. Please, try again.'));
        }
        $this->set(compact('languageOption'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Language Option id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $languageOption = $this->LanguageOptions->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $languageOption = $this->LanguageOptions->patchEntity($languageOption, $this->request->getData());
            if ($this->LanguageOptions->save($languageOption)) {
                $this->Flash->success(__('The language option has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The language option could not be saved. Please, try again.'));
        }
        $this->set(compact('languageOption'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Language Option id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $languageOption = $this->LanguageOptions->get($id);
        if ($this->LanguageOptions->delete($languageOption)) {
            $this->Flash->success(__('The language option has been deleted.'));
        } else {
            $this->Flash->error(__('The language option could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
