<div class="campusItems index">
	<h2><?php echo __('Campus Items'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('lot'); ?></th>
			<th><?php echo $this->Paginator->sort('validity'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('utilization_id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_detail_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($campusItems as $campusItem): ?>
	<tr>
		<td><?php echo h($campusItem['CampusItem']['id']); ?>&nbsp;</td>
		<td><?php echo h($campusItem['CampusItem']['lot']); ?>&nbsp;</td>
		<td><?php echo h($campusItem['CampusItem']['validity']); ?>&nbsp;</td>
		<td><?php echo h($campusItem['CampusItem']['status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($campusItem['Item']['name'], array('controller' => 'items', 'action' => 'view', $campusItem['Item']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($campusItem['User']['email'], array('controller' => 'users', 'action' => 'view', $campusItem['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($campusItem['Utilization']['name'], array('controller' => 'utilizations', 'action' => 'view', $campusItem['Utilization']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($campusItem['ItemDetail']['name'], array('controller' => 'item_details', 'action' => 'view', $campusItem['ItemDetail']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $campusItem['CampusItem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $campusItem['CampusItem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $campusItem['CampusItem']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $campusItem['CampusItem']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Campus Item'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Utilizations'), array('controller' => 'utilizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utilization'), array('controller' => 'utilizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Details'), array('controller' => 'item_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Detail'), array('controller' => 'item_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
