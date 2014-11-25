<?php
class WorkersController extends AppController {
    public $helpers = array('Html', 'Form');
    public function index() {
        $this->set('workers', $this->Worker->find('all'));
        }

    public function add(){
        $this->loadModel('UsagePolicy');
        $policies=$this->UsagePolicy->find('list', array('fields' => array('UsagePolicy.id', 'UsagePolicy.usage_policy_name')));
        $this->set('policies',$policies);
        
        if ($this->request->is('post')){
            $this->Worker->create();
            if ($this->Worker->save($this->request->data)){
                $this->Session->setFlash(__('Worker has been saved'));
                return $this->redirect(array('action'=> 'index'));
            }
            $this->Session->setFlash(__('Unable to save Worker info'));
        }
    }

    public function edit($id = null) {
        $this->loadModel('UsagePolicy');
        $policies=$this->UsagePolicy->find('list', array('fields' => array('UsagePolicy.id', 'UsagePolicy.usage_policy_name')));
        $this->set('policies',$policies);
        
        if (!$id) {
            throw new NotFoundException(__('Invalid Worker id'));
        }

        $worker = $this->Worker->findById($id);
        if (!$worker) {
            throw new NotFoundException(__('Invalid Worker'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Worker->id = $id;
            if ($this->Worker->save($this->request->data)) {
                $this->Session->setFlash(__('Your Worker has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update the Worker.'));
        }

        if (!$this->request->data) {
            $this->request->data = $worker;
        }
    }    	

    public function delete($id) {
//        if ($this->request->is('get')) {
//            throw new MethodNotAllowedException();
//        }

        if ($this->Worker->delete($id)) {
            $this->Session->setFlash(
                __('The worker with id: %s has been deleted.', h($id))
            );
            return $this->redirect(array('action' => 'index'));
        }
    }

}
?>
