
<h1>Adicionar Mapa de Uso</h1>
<?php
echo $this->Form->create('UsageMap');
echo $this->Form->input('position_id',array('label'=>'Posição'));
echo $this->Form->input('worker_id',array('label'=>'Colaborador'));
echo $this->Form->input('usage_date',array('label'=>'Data'));
echo $this->Form->end('Salvar');
?>
