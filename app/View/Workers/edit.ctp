
<h1>Edit Worker</h1>
<?php
echo $this->Form->create('Worker');
echo $this->Form->input('card_number');
echo $this->Form->input('name');
echo $this->Form->input('usage_policy_id',array('options'=>$policies));
echo $this->Form->end('Save Worker');
?>

