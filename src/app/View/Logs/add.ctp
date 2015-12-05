<div class="logs form">
<?php echo $this->Form->create('Log'); ?>
	<fieldset>
		<legend><?php echo __('Add Log'); ?></legend>
	<?php
		echo $this->Form->input('moment');
		echo $this->Form->input('amount');
		echo $this->Form->input('comment');
		echo $this->Form->input('campus_item_id');
		echo $this->Form->input('deal_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Logs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Campus Items'), array('controller' => 'campus_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus Item'), array('controller' => 'campus_items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deal Types'), array('controller' => 'deal_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deal Type'), array('controller' => 'deal_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
