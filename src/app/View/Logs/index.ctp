
<script>
    window.location = "campusItems/estoque";
</script>
<div class="logs index">
	<h2><?php echo __('Logs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('moment'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('campus_item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('deal_type_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($logs as $log): ?>
	<tr>
		<td><?php echo h($log['Log']['id']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['moment']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['amount']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['comment']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($log['CampusItem']['id'], array('controller' => 'campus_items', 'action' => 'view', $log['CampusItem']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($log['DealType']['name'], array('controller' => 'deal_types', 'action' => 'view', $log['DealType']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $log['Log']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $log['Log']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $log['Log']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $log['Log']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Log'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Campus Items'), array('controller' => 'campus_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus Item'), array('controller' => 'campus_items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deal Types'), array('controller' => 'deal_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal Type'), array('controller' => 'deal_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
