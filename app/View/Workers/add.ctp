
<h1>Adicionar Colaborador</h1>
<?php
echo $this->Form->create('Worker');
echo $this->Form->input('card_number',array('label' => 'Chapa'));
echo $this->Form->input('name',array('label' => 'Nome'));
echo $this->Form->input('usage_policy_id',array('label' => 'Política de Uso','options'=>$policies));
echo $this->Form->end('Salvar');
?>
