<div class="utilizations form">
<?php echo $this->Form->create('Utilization'); ?>
	<fieldset>
		<legend><?php echo __('Edit Utilization'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Utilization.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Utilization.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Utilizations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Campus Items'), array('controller' => 'campus_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus Item'), array('controller' => 'campus_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
