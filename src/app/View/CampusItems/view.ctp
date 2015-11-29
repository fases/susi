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
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($campusItem['CampusItem']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($campusItem['CampusItem']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($campusItem['Item']['name'], array('controller' => 'items', 'action' => 'view', $campusItem['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($campusItem['User']['email'], array('controller' => 'users', 'action' => 'view', $campusItem['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Utilization'); ?></dt>
		<dd>
			<?php echo $this->Html->link($campusItem['Utilization']['name'], array('controller' => 'utilizations', 'action' => 'view', $campusItem['Utilization']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item Detail'); ?></dt>
		<dd>
			<?php echo $this->Html->link($campusItem['ItemDetail']['name'], array('controller' => 'item_details', 'action' => 'view', $campusItem['ItemDetail']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Utilizations'), array('controller' => 'utilizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Utilization'), array('controller' => 'utilizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Item Details'), array('controller' => 'item_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Detail'), array('controller' => 'item_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
