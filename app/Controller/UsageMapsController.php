<?php
class UsageMapsController extends AppController {
    public $helpers = array('Html', 'Form');
    public function index() {
        $this->set('usage_maps', $this->UsageMap->find('all'));
        }

    public function add(){
        $this->loadModel('Position');
        $positions=$this->Position->find('list', array('fields' => array('Position.id', 'Position.bay_number')));
        $this->set('positions',$positions);
        
        $this->loadModel('Worker');
        $workers=$this->Worker->find('list', array('fields' => array('Worker.id', 'Worker.name')));
        $this->set('workers',$workers);

        if ($this->request->is('post')){
            $this->UsageMap->create();
            if ($this->UsageMap->save($this->request->data)){
                $this->Session->setFlash(__('UsageMap has been saved'));
                return $this->redirect(array('action'=> 'index'));
            }
            $this->Session->setFlash(__('Unable to save the UsageMap'));
        }
    }

    public function edit($id = null) {
        $this->loadModel('Position');
        $positions=$this->Position->find('list', array('fields' => array('Position.id', 'Position.bay_number')));
        $this->set('positions',$positions);
        
        $this->loadModel('Worker');
        $workers=$this->Worker->find('list', array('fields' => array('Worker.id', 'Worker.name')));
        $this->set('workers',$workers);

        if (!$id) {
            throw new NotFoundException(__('Invalid UsageMap'));
        }

        $position = $this->UsageMap->findById($id);
        if (!$position) {
            throw new NotFoundException(__('Invalid UsageMap'));
        }

        if ($this->request->is(array('position', 'put'))) {
            $this->UsageMap->id = $id;
            if ($this->UsageMap->save($this->request->data)) {
                $this->Session->setFlash(__('Your UsageMap has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update the UsageMap.'));
        }

        if (!$this->request->data) {
            $this->request->data = $position;
        }
    }    	

    public function delete($id = null) {
  //      if ($this->request->is('get')) {
  //          throw new MethodNotAllowedException();
  //      }

        if ($this->UsageMap->delete($id)) {
            $this->Session->setFlash(
                __('The UsageMap %s has been deleted.', h($id))
            );
            return $this->redirect(array('action' => 'index'));
        }
    }
}
?>
