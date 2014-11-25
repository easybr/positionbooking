<!-- File: /app/View/Positions/add.ctp -->

<h1>Add New Position</h1>
<?php
echo $this->Form->create('Position');
echo $this->Form->input('bay_number');
echo $this->Form->input('floor_number');
echo $this->Form->end('Save Position');
?>
