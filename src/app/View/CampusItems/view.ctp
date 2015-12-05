<div class="campusItems view">
<h2><?php echo __('Campus Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($campusItem['CampusItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lot'); ?></dt>
		<dd>
			<?php echo h($campusItem['CampusItem']['lot']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Validity'); ?></dt>
		<dd>
			<?php echo h($campusItem['CampusItem']['validity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($campusItem['Item']['name'], array('controller' => 'items', 'action' => 'view', $campusItem['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($campusItem['User']['name'], array('controller' => 'users', 'action' => 'view', $campusItem['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Campus Item'), array('action' => 'edit', $campusItem['CampusItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Campus Item'), array('action' => 'delete', $campusItem['CampusItem']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $campusItem['CampusItem']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Campus Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs'), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Logs'); ?></h3>
	<?php if (!empty($campusItem['Log'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Moment'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Campus Item Id'); ?></th>
		<th><?php echo __('Deal Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($campusItem['Log'] as $log): ?>
		<tr>
			<td><?php echo $log['id']; ?></td>
			<td><?php echo $log['moment']; ?></td>
			<td><?php echo $log['amount']; ?></td>
			<td><?php echo $log['comment']; ?></td>
			<td><?php echo $log['campus_item_id']; ?></td>
			<td><?php echo $log['deal_type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'logs', 'action' => 'view', $log['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'logs', 'action' => 'edit', $log['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'logs', 'action' => 'delete', $log['id']), array('confirm' => __('Are you sure you want to delete # %s?', $log['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
