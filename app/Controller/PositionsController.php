<?php
class PositionsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('positions', $this->Position->find('all'));
    }

    public function allocate($id=null){
           
        $allocationData = array('UsageMap'=>array(
                                                'position_id'=>$id,
                                                'worker_id'=>5,
                                                'usage_date'=> date("Y-m-d")      
             ) );  
        $this->requestAction('/usageMaps/allocate',array('pass' => $allocationData));
    }
    public function add(){
        if ($this->request->is('post')){
            $this->Position->create();
            if ($this->Position->save($this->request->data)){
                $this->Session->setFlash(__('Position has been saved'));
                return $this->redirect(array('action'=> 'index'));
            }
            $this->Session->setFlash(__('Unable to save the Position'));
        }
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid Position'));
        }

        $position = $this->Position->findById($id);
        if (!$position) {
            throw new NotFoundException(__('Invalid Position'));
        }

        if ($this->request->is(array('position', 'put'))) {
            $this->Position->id = $id;
            if ($this->Position->save($this->request->data)) {
                $this->Session->setFlash(__('Your Position has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update the Position.'));
        }

        if (!$this->request->data) {
            $this->request->data = $position;
        }
    }    	

    public function delete($id = null) {
  //      if ($this->request->is('get')) {
  //          throw new MethodNotAllowedException();
  //      }

        if ($this->Position->delete($id)) {
            $this->Session->setFlash(
                __('The Position %s has been deleted.', h($id))
            );
            return $this->redirect(array('action' => 'index'));
        }
    }
}
?>
