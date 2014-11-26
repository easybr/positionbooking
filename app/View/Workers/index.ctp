<h1>Colaboradores</h1>
    <?php echo $this->Html->link(
        'Novo Colaborador',
        array('controller'=>'workers','action'=>'add')
    ); ?>
<table>
    <tr>
        <th>Chapa</th>
        <th>Nome</th>
        <th>Política</th> 
	    <th>Ações</th>
        <th>Criação</th>
	    <th>Modificação</th>
    </tr>


    <?php foreach ($workers as $worker): ?>
    <tr>
	<td><?php echo $worker['Worker']['card_number']; ?></td>
	<td><?php echo $worker['Worker']['name']; ?></td>
    <td><?php echo $worker['UsagePolicy']['usage_policy_name']; ?></td> 
    <td>
        <?php
            echo $this->Html->link(
                'Edit', array('action' => 'edit', $worker['Worker']['id'])
            );
        ?>
        <?php
            echo $this->Html->link(
                'Delete', array('action' => 'delete', $worker['Worker']['id'])      
            );
        ?>

        </td>
	<td><?php echo $worker['Worker']['created']; ?></td> 
	<td><?php echo $worker['Worker']['modified']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($worker); ?>
</table>
