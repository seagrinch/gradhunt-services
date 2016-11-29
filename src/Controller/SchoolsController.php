<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Schools Controller
 *
 * @property \App\Model\Table\SchoolsTable $Schools
 */
class SchoolsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $schools = $this->paginate($this->Schools);

        $this->set(compact('schools'));
        $this->set('_serialize', 'schools');
    }

    /**
     * View method
     *
     * @param string|null $id School id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $school = $this->Schools->get($id, [
            'contain' => ['Offerings.Programs']
        ]);

        $this->set('school', $school);
        $this->set('_serialize', 'school');
    }

    /**
     * Recommend method
     */
    public function recommend($pid=null)
    {
      // Criteria: Region, Degree, Program, School Size, Score
      $query = $this->Schools->find('all')
        ->matching('Offerings', function ($q) use ($pid) {
          return $q->where(['program_id' => $pid]);
        });
      if ($this->request->query('region')) {
        $query->where(['Schools.OBEREG' => $this->request->query('region')]);
      }
      if ($this->request->query('degree')=='phd') {
        $query->where(['PDOCRS >=' => 1]);
      }
      if ($this->request->query('degree')=='masters') {
        $query->where(['PMASTR >=' => 1]);
      }
      if ($this->request->query('size')) {
        $query->where(['Schools.INSTSIZE' => $this->request->query('size')]);
      }
      if ($this->request->query('score')) {
        $query
          ->where(['SATMT75 <=' => $score = $this->request->query('score')])
          ->order(['SATMT75'=>'DESC']);
      }

      if ($this->request->is('json') ) {
        $this->paginate['limit'] = 5;
      }

      $this->set('schools',$this->paginate($query));
      $this->set('_serialize', 'schools');      
    }
    
}
