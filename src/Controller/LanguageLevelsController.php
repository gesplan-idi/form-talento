<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LanguageLevels Controller
 *
 * @property \App\Model\Table\LanguageLevelsTable $LanguageLevels
 * @method \App\Model\Entity\LanguageLevel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LanguageLevelsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $languageLevels = $this->paginate($this->LanguageLevels);

        $this->set(compact('languageLevels'));
    }

    /**
     * View method
     *
     * @param string|null $id Language Level id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $languageLevel = $this->LanguageLevels->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('languageLevel'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $languageLevel = $this->LanguageLevels->newEmptyEntity();
        if ($this->request->is('post')) {
            $languageLevel = $this->LanguageLevels->patchEntity($languageLevel, $this->request->getData());
            if ($this->LanguageLevels->save($languageLevel)) {
                $this->Flash->success(__('The language level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The language level could not be saved. Please, try again.'));
        }
        $this->set(compact('languageLevel'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Language Level id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $languageLevel = $this->LanguageLevels->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $languageLevel = $this->LanguageLevels->patchEntity($languageLevel, $this->request->getData());
            if ($this->LanguageLevels->save($languageLevel)) {
                $this->Flash->success(__('The language level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The language level could not be saved. Please, try again.'));
        }
        $this->set(compact('languageLevel'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Language Level id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $languageLevel = $this->LanguageLevels->get($id);
        if ($this->LanguageLevels->delete($languageLevel)) {
            $this->Flash->success(__('The language level has been deleted.'));
        } else {
            $this->Flash->error(__('The language level could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
