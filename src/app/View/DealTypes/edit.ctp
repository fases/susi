<div class="dealTypes form">
<?php echo $this->Form->create('DealType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Deal Type'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DealType.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('DealType.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Deal Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Logs'), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
