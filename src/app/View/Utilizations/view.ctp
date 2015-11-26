<div class="utilizations view">
<h2><?php echo __('Utilization'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($utilization['Utilization']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($utilization['Utilization']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Utilization'), array('action' => 'edit', $utilization['Utilization']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Utilization'), array('action' => 'delete', $utilization['Utilization']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $utilization['Utilization']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Utilizations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utilization'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campus Items'), array('controller' => 'campus_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus Item'), array('controller' => 'campus_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Campus Items'); ?></h3>
	<?php if (!empty($utilization['CampusItem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Lot'); ?></th>
		<th><?php echo __('Validity'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Utilization Id'); ?></th>
		<th><?php echo __('Item Detail Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($utilization['CampusItem'] as $campusItem): ?>
		<tr>
			<td><?php echo $campusItem['id']; ?></td>
			<td><?php echo $campusItem['lot']; ?></td>
			<td><?php echo $campusItem['validity']; ?></td>
			<td><?php echo $campusItem['status']; ?></td>
			<td><?php echo $campusItem['item_id']; ?></td>
			<td><?php echo $campusItem['user_id']; ?></td>
			<td><?php echo $campusItem['utilization_id']; ?></td>
			<td><?php echo $campusItem['item_detail_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'campus_items', 'action' => 'view', $campusItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'campus_items', 'action' => 'edit', $campusItem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'campus_items', 'action' => 'delete', $campusItem['id']), array('confirm' => __('Are you sure you want to delete # %s?', $campusItem['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Campus Item'), array('controller' => 'campus_items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
