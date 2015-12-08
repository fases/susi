<div class="indicatorTypes form">
<?php echo $this->Form->create('IndicatorType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Indicator Type'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('IndicatorType.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('IndicatorType.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Indicator Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Indicators'), array('controller' => 'indicators', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indicator'), array('controller' => 'indicators', 'action' => 'add')); ?> </li>
	</ul>
</div>
