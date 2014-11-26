<!-- File: /app/View/Positions/add.ctp -->

<h1>Adicionar Posição</h1>
<?php
echo $this->Form->create('Position');
echo $this->Form->input('bay_number',array('label' => 'Número da Baia'));
echo $this->Form->input('floor_number',array('label'=> 'Andar'));
echo $this->Form->end('Salvar');
?>
