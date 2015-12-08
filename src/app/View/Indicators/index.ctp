<div class="indicators index">
	<h2><?php echo __('Indicators'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('indicator_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('campus_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($indicators as $indicator): ?>
	<tr>
		<td><?php echo h($indicator['Indicator']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($indicator['Item']['name'], array('controller' => 'items', 'action' => 'view', $indicator['Item']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($indicator['IndicatorType']['name'], array('controller' => 'indicator_types', 'action' => 'view', $indicator['IndicatorType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($indicator['Campus']['name'], array('controller' => 'campuses', 'action' => 'view', $indicator['Campus']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $indicator['Indicator']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $indicator['Indicator']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $indicator['Indicator']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $indicator['Indicator']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Indicator'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indicator Types'), array('controller' => 'indicator_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indicator Type'), array('controller' => 'indicator_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campuses'), array('controller' => 'campuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus'), array('controller' => 'campuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
