<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Localizations Controller
 *
 * @property \App\Model\Table\LocalizationsTable $Localizations
 */
class LocalizationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $localizations = $this->paginate($this->Localizations);

        $this->set(compact('localizations'));
        $this->set('_serialize', ['localizations']);
    }

    /**
     * View method
     *
     * @param string|null $id Localization id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $localization = $this->Localizations->get($id, [
            'contain' => []
        ]);

        $this->set('localization', $localization);
        $this->set('_serialize', ['localization']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $localization = $this->Localizations->newEntity();
        if ($this->request->is('post')) {
            $localization = $this->Localizations->patchEntity($localization, $this->request->data);
            if ($this->Localizations->save($localization)) {
                $this->Flash->success(__('The localization has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The localization could not be saved. Please, try again.'));
        }
        $this->set(compact('localization'));
        $this->set('_serialize', ['localization']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Localization id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $localization = $this->Localizations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $localization = $this->Localizations->patchEntity($localization, $this->request->data);
            if ($this->Localizations->save($localization)) {
                $this->Flash->success(__('The localization has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The localization could not be saved. Please, try again.'));
        }
        $this->set(compact('localization'));
        $this->set('_serialize', ['localization']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Localization id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $localization = $this->Localizations->get($id);
        if ($this->Localizations->delete($localization)) {
            $this->Flash->success(__('The localization has been deleted.'));
        } else {
            $this->Flash->error(__('The localization could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
