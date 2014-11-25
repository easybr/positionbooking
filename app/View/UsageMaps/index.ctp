<h1>UsageMaps</h1>
    <?php echo $this->Html->link(
        'Add UsageMaps',
        array('controller'=>'usage_maps','action'=>'add')
    ); ?>
<table>
    <tr>
        <th>Position</th>
        <th>Worker</th>
        <th>Date</th>
        <th>Actions</th> 
	    <th>Created</th>
	    <th>Modified</th>
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
