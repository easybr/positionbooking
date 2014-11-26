<h1>Políticas de Uso</h1>
    <?php echo $this->Html->link(
        'Nova Política de Uso',
        array('controller'=>'usage_policies','action'=>'add')
    ); ?>
<table>
    <tr>
        <th>Nome da Política</th>
        <th>Home Offices por Semana</th>
        <th>Ações</th> 
	    <th>Criação</th>
	    <th>Modificação</th>
    </tr>


    <?php foreach ($usage_policies as $usage_policy): ?>
    <tr>
	<td><?php echo $usage_policy['UsagePolicy']['usage_policy_name']; ?></td>
	<td><?php echo $usage_policy['UsagePolicy']['qtt_home_offices_per_week']; ?></td>
    <td>
        <?php
            echo $this->Html->link(
                'Edit', array('action' => 'edit', $usage_policy['UsagePolicy']['id'])
            );
        ?>
        <?php
            echo $this->Html->link(
                'Delete', array('action' => 'delete', $usage_policy['UsagePolicy']['id'])      
            );
        ?>

        </td>
	<td><?php echo $usage_policy['UsagePolicy']['created']; ?></td> 
	<td><?php echo $usage_policy['UsagePolicy']['modified']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($usage_policy); ?>
</table>
