<h1>UsagePolicys</h1>
    <?php echo $this->Html->link(
        'Add UsagePolicy',
        array('controller'=>'usage_policies','action'=>'add')
    ); ?>
<table>
    <tr>
        <th>Policy Name</th>
        <th>Home Offices per Week</th>
        <th>Actions</th> 
	    <th>Created</th>
	    <th>Modified</th>
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
