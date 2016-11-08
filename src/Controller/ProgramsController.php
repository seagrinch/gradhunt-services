<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Programs Controller
 *
 * @property \App\Model\Table\ProgramsTable $Programs
 */
class ProgramsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $programs = $this->paginate($this->Programs);

        $this->set(compact('programs'));
        $this->set('_serialize', ['programs']);
    }

    /**
     * View method
     *
     * @param string|null $id Program id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $program = $this->Programs->get($id, [
            'contain' => ['Offerings']
        ]);

        $this->set('program', $program);
        $this->set('_serialize', ['program']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $program = $this->Programs->newEntity();
        if ($this->request->is('post')) {
            $program = $this->Programs->patchEntity($program, $this->request->data);
            if ($this->Programs->save($program)) {
                $this->Flash->success(__('The program has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The program could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('program'));
        $this->set('_serialize', ['program']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Program id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $program = $this->Programs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $program = $this->Programs->patchEntity($program, $this->request->data);
            if ($this->Programs->save($program)) {
                $this->Flash->success(__('The program has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The program could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('program'));
        $this->set('_serialize', ['program']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Program id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $program = $this->Programs->get($id);
        if ($this->Programs->delete($program)) {
            $this->Flash->success(__('The program has been deleted.'));
        } else {
            $this->Flash->error(__('The program could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
