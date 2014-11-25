<!-- File: /app/View/Posts/edit.ctp -->

<h1>Edit Position</h1>
<?php
echo $this->Form->create('Position');
echo $this->Form->input('bay_number');
echo $this->Form->input('floor_number');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Position');
?>

