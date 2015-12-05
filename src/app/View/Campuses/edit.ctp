<div class="campuses form">
<?php echo $this->Form->create('Campus'); ?>
	<fieldset>
		<legend><?php echo __('Edit Campus'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('phone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Campus.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Campus.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Campuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Indicators'), array('controller' => 'indicators', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indicator'), array('controller' => 'indicators', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
