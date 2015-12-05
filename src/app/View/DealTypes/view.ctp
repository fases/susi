<div class="dealTypes view">
<h2><?php echo __('Deal Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dealType['DealType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dealType['DealType']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Deal Type'), array('action' => 'edit', $dealType['DealType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Deal Type'), array('action' => 'delete', $dealType['DealType']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $dealType['DealType']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Deal Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs'), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Logs'); ?></h3>
	<?php if (!empty($dealType['Log'])): ?>
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
	<?php foreach ($dealType['Log'] as $log): ?>
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
