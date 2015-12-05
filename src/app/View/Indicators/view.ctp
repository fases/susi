<div class="indicators view">
<h2><?php echo __('Indicator'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($indicator['Indicator']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($indicator['Item']['name'], array('controller' => 'items', 'action' => 'view', $indicator['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indicator Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($indicator['IndicatorType']['name'], array('controller' => 'indicator_types', 'action' => 'view', $indicator['IndicatorType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Campus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($indicator['Campus']['name'], array('controller' => 'campuses', 'action' => 'view', $indicator['Campus']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Indicator'), array('action' => 'edit', $indicator['Indicator']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Indicator'), array('action' => 'delete', $indicator['Indicator']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $indicator['Indicator']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Indicators'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indicator'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indicator Types'), array('controller' => 'indicator_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indicator Type'), array('controller' => 'indicator_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campuses'), array('controller' => 'campuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campus'), array('controller' => 'campuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
