
<h1>Edit Usage Policy</h1>
<?php
echo $this->Form->create('UsagePolicy');
echo $this->Form->input('usage_policy_name');
echo $this->Form->input('qtt_home_offices_per_week');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Usage Policy');
?>

