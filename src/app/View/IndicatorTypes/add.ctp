<div class="indicatorTypes form">
<?php echo $this->Form->create('IndicatorType'); ?>
	<fieldset>
		<legend><?php echo __('Add Indicator Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Indicator Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Indicators'), array('controller' => 'indicators', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indicator'), array('controller' => 'indicators', 'action' => 'add')); ?> </li>
	</ul>
</div>
