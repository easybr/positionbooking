
<h1>Add New Usage Policy</h1>
<?php
echo $this->Form->create('UsagePolicy');
echo $this->Form->input('usage_policy_name');
echo $this->Form->input('qtt_home_offices_per_week');
echo $this->Form->end('Save Usage Policy');
?>
