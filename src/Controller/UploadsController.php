<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Uploads Controller
 *
 * @property \App\Model\Table\UploadsTable $Uploads
 */
class UploadsController extends AppController
{
     public $paginate = [
        'fields' => ['Uploads.id','Uploads.username','Uploads.name', 'Uploads.password', 'Uploads.role', 'Uploads.dir','Uploads.photo'],
        'limit' => 3,
        'order' => [
            'Uploads.title' => 'asc'
        ]
    ];

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('backend');
        $uploads = $this->paginate($this->Uploads);

        $this->set(compact('uploads'));
        $this->set('_serialize', ['uploads']);
    }

    /**
     * View method
     *
     * @param string|null $id Upload id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('backend');
        $upload = $this->Uploads->get($id, [
            'contain' => []
        ]);

        $this->set('upload', $upload);
        $this->set('_serialize', ['upload']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('backend');
        $upload = $this->Uploads->newEntity();
        if ($this->request->is('post')) {
            $upload = $this->Uploads->patchEntity($upload, $this->request->data);
            if ($this->Uploads->save($upload)) {
                $this->Flash->success(__('The upload has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The upload could not be saved. Please, try again.'));
        }
        $this->set(compact('upload'));
        $this->set('_serialize', ['upload']);

      
    }

    /**
     * Edit method
     *
     * @param string|null $id Upload id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('backend');
        $upload = $this->Uploads->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $upload = $this->Uploads->patchEntity($upload, $this->request->data);
            if ($this->Uploads->save($upload)) {
                $this->Flash->success(__('The upload has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The upload could not be saved. Please, try again.'));
        }
        $this->set(compact('upload'));
        $this->set('_serialize', ['upload']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Upload id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->viewBuilder()->layout('backend');
        $this->request->allowMethod(['post', 'delete']);
        $upload = $this->Uploads->get($id);
        if ($this->Uploads->delete($upload)) {
            $this->Flash->success(__('The upload has been deleted.'));
        } else {
            $this->Flash->error(__('The upload could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

   
}
