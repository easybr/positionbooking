<h1>Mapas de Uso</h1>
    <?php echo $this->Html->link(
        'Novo Mapa de Uso',
        array('controller'=>'usage_maps','action'=>'add')
    ); ?>
<table>
    <tr>
        <th>Posição</th>
        <th>Colaborador</th>
        <th>Data</th>
        <th>Ações</th> 
	    <th>Criação</th>
	    <th>Modificação</th>
    </tr>


    <?php foreach ($usage_maps as $usage_map): ?>
    <tr>
	<td><?php echo $usage_map['Position']['bay_number']; ?></td>
	<td><?php echo $usage_map['Worker']['name']; ?></td>
    <td><?php echo $usage_map['UsageMap']['usage_date']; ?></td>

    <td>
        <?php
            echo $this->Html->link(
                'Edit', array('action' => 'edit', $usage_map['UsageMap']['id'])
            );
        ?>
        <?php
            echo $this->Html->link(
                'Delete', array('action' => 'delete', $usage_map['UsageMap']['id'])      
            );
        ?>

        </td>
	<td><?php echo $usage_map['UsageMap']['created']; ?></td> 
	<td><?php echo $usage_map['UsageMap']['modified']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($usage_map); ?>
</table>
<?php 
    echo $this->Html->link(
           'Anterior', array('action' => 'index', date( "Y-m-d", strtotime( "$date -1 day" ) )));
    echo " | ";
    echo $this->Html->link(
           'Todos', array('action' => 'index' ));
    echo " | ";
    echo $this->Html->link(
           'Próximo', array('action' => 'index', date( "Y-m-d", strtotime( "$date +1 day" ) ))); 
?>
