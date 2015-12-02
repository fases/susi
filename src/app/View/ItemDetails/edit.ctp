<div class="itemDetails form">
<?php echo $this->Form->create('ItemDetail'); ?>
	<fieldset>
		<legend><?php echo __('Edit Item Detail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ItemDetail.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ItemDetail.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Item Details'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Campus Items'), array('controller' => 'campus_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus Item'), array('controller' => 'campus_items', 'action' => 'add')); ?> </li>
	</ul>
</div>