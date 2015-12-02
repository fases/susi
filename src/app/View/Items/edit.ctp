<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Edit Item'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Item.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Item.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Item Types'), array('controller' => 'item_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item Type'), array('controller' => 'item_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
