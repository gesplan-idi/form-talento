<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Languages Controller
 *
 * @property \App\Model\Table\LanguagesTable $Languages
 * @method \App\Model\Entity\Language[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LanguagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'LanguageOptions', 'LanguageLevels'],
        ];
        $user_id = $this->request->getAttribute('user_id');
        if ($user_id) {
            $languages = $this->paginate($this->Educations->findByUserId($user_id));
        } else {
            $languages = $this->paginate($this->Languages);
        }

        $this->set(compact('languages', 'user_id'));
    }

    /**
     * View method
     *
     * @param string|null $id Language id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $language = $this->Languages->get($id, [
            'contain' => ['Users', 'LanguageOptions', 'LanguageLevels'],
        ]);

        $this->set(compact('language'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $language = $this->Languages->newEmptyEntity();
        if ($this->request->is('post')) {
            $language = $this->Languages->patchEntity($language, $this->request->getData());
            if ($this->Languages->save($language)) {
                $this->Flash->success(__('The language has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The language could not be saved. Please, try again.'));
        }
        $users = $this->Languages->Users->find('list', ['limit' => 200])->all();
        $languageOptions = $this->Languages->LanguageOptions->find('list', ['limit' => 200])->all();
        $languageLevels = $this->Languages->LanguageLevels->find('list', ['limit' => 200])->all();
        $this->set(compact('language', 'users', 'languageOptions', 'languageLevels'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Language id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $language = $this->Languages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $language = $this->Languages->patchEntity($language, $this->request->getData());
            if ($this->Languages->save($language)) {
                $this->Flash->success(__('The language has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The language could not be saved. Please, try again.'));
        }
        $users = $this->Languages->Users->find('list', ['limit' => 200])->all();
        $languageOptions = $this->Languages->LanguageOptions->find('list', ['limit' => 200])->all();
        $languageLevels = $this->Languages->LanguageLevels->find('list', ['limit' => 200])->all();
        $this->set(compact('language', 'users', 'languageOptions', 'languageLevels'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Language id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $language = $this->Languages->get($id);
        if ($this->Languages->delete($language)) {
            $this->Flash->success(__('The language has been deleted.'));
        } else {
            $this->Flash->error(__('The language could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
