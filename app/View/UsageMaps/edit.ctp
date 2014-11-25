
<h1>Edit Usage Map</h1>
<?php
echo $this->Form->create('UsageMap');
echo $this->Form->input('position_id');
echo $this->Form->input('worker_id');
echo $this->Form->input('usage_date');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Usage Map');
?>

