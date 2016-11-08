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
        $this->set('_serialize', 'programs');
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
            'contain' => ['Offerings.Schools']
        ]);

        $this->set('program', $program);
        $this->set('_serialize', 'program');
    }

    /**
     * Majors method
     *
     * @return \Cake\Network\Response|null
     */
    public function majors()
    {
      $query = $this->Programs->find('all');
      $query->contain([]);
      $query->where(['char_length(code)' => 7]);
      if ($this->request->is('json') ) { //Formerly ajax
        $this->paginate['limit'] = 5000;
        //$this->set('_serialize', false);
      }
      $this->set('programs',$this->paginate($query));
      $this->set('_serialize', 'programs');
      $this->render('index');
    }


}
