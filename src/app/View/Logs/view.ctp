<div class="logs view">
<h2><?php echo __('Log'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($log['Log']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Moment'); ?></dt>
		<dd>
			<?php echo h($log['Log']['moment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($log['Log']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($log['Log']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Campus Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($log['CampusItem']['id'], array('controller' => 'campus_items', 'action' => 'view', $log['CampusItem']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deal Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($log['DealType']['name'], array('controller' => 'deal_types', 'action' => 'view', $log['DealType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Log'), array('action' => 'edit', $log['Log']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Log'), array('action' => 'delete', $log['Log']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $log['Log']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campus Items'), array('controller' => 'campus_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus Item'), array('controller' => 'campus_items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deal Types'), array('controller' => 'deal_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal Type'), array('controller' => 'deal_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
