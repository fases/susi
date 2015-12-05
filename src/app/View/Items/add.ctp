<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Add Item'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('item_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Item Types'), array('controller' => 'item_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Type'), array('controller' => 'item_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indicators'), array('controller' => 'indicators', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indicator'), array('controller' => 'indicators', 'action' => 'add')); ?> </li>
	</ul>
</div>
