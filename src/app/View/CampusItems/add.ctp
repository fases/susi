<div class="campusItems form">
<?php echo $this->Form->create('CampusItem'); ?>
	<fieldset>
		<legend><?php echo __('Add Campus Item'); ?></legend>
	<?php
		echo $this->Form->input('lot');
		echo $this->Form->input('validity');
		echo $this->Form->input('status');
		echo $this->Form->input('item_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('utilization_id');
		echo $this->Form->input('item_detail_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Campus Items'), array('action' => 'index')); ?></li>
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
