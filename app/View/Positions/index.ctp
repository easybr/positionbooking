<h1>Posições</h1>
    <?php echo $this->Html->link(
        'Nova Posição',
        array('controller'=>'positions','action'=>'add')
    ); ?>
<table>
    <tr>
        <th>Número da Baia</th>
        <th>Andar</th>
        <th>Ações</th> 
	    <th>Criação</th>
	    <th>Modificação</th>
    </tr>


    <?php foreach ($positions as $position): ?>
    <tr>
	<td><?php echo $position['Position']['bay_number']; ?></td>
	<td><?php echo $position['Position']['floor_number']; ?></td>
    <td>
        <?php
            echo $this->Html->link(
                'Edit', array('action' => 'edit', $position['Position']['id'])
            );
        ?>
        <?php
            echo $this->Html->link(
                'Delete', array('action' => 'delete', $position['Position']['id'])      
            );
        ?>

        </td>
	<td><?php echo $position['Position']['created']; ?></td> 
	<td><?php echo $position['Position']['modified']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($position); ?>
</table>
