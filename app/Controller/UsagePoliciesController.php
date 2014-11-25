<?php
class UsagePoliciesController extends AppController {
    public $helpers = array('Html', 'Form');
    public function index() {
        $this->set('usage_policies', $this->UsagePolicy->find('all'));
        }

    public function add(){
        if ($this->request->is('post')){
            $this->UsagePolicy->create();
            if ($this->UsagePolicy->save($this->request->data)){
                $this->Session->setFlash(__('UsagePolicy has been saved'));
                return $this->redirect(array('action'=> 'index'));
            }
            $this->Session->setFlash(__('Unable to save the UsagePolicy'));
        }
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid UsagePolicy'));
        }

        $usage_policy = $this->UsagePolicy->findById($id);
        if (!$usage_policy) {
            throw new NotFoundException(__('Invalid UsagePolicy'));
        }

        if ($this->request->is(array('usage_policy', 'put'))) {
            $this->UsagePolicy->id = $id;
            if ($this->UsagePolicy->save($this->request->data)) {
                $this->Session->setFlash(__('Your UsagePolicy has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update the UsagePolicy.'));
        }

        if (!$this->request->data) {
            $this->request->data = $usage_policy;
        }
    }    	

    public function delete($id = null) {
//        if ($this->request->is('get')) {
//            throw new MethodNotAllowedException();
//        }

        if ($this->UsagePolicy->delete($id)) {
            $this->Session->setFlash(
                __('The the Usage Policy %s has been deleted.', h($id))
            );
        return $this->redirect(array('action' => 'index'));
    }    
}

}
?>
