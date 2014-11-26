<!-- File: /app/View/Posts/edit.ctp -->

<h1>Editar Posição</h1>
<?php
echo $this->Form->create('Position');
echo $this->Form->input('bay_number',array('label' => 'Número da Baia'));
echo $this->Form->input('floor_number',array('label'=> 'Andar'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Salvar');
?>

