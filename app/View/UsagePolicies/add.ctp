
<h1>Adicionar Política de Uso</h1>
<?php
echo $this->Form->create('UsagePolicy');
echo $this->Form->input('usage_policy_name',array('label' => 'Nome da Política'));
echo $this->Form->input('qtt_home_offices_per_week',array('label'=> 'Home Offices por Semana'));
echo $this->Form->end('Salvar');
?>
