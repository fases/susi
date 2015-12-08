<div class="indicators form">
<?php echo $this->Form->create('Indicator'); ?>
	<fieldset>
		<legend><?php echo __('Add Indicator'); ?></legend>
	<?php
		echo $this->Form->input('item_id');
		echo $this->Form->input('indicator_type_id');
		echo $this->Form->input('campus_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Indicators'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indicator Types'), array('controller' => 'indicator_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indicator Type'), array('controller' => 'indicator_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campuses'), array('controller' => 'campuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus'), array('controller' => 'campuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
