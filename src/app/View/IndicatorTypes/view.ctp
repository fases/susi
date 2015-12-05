<div class="indicatorTypes view">
<h2><?php echo __('Indicator Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($indicatorType['IndicatorType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($indicatorType['IndicatorType']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Indicator Type'), array('action' => 'edit', $indicatorType['IndicatorType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Indicator Type'), array('action' => 'delete', $indicatorType['IndicatorType']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $indicatorType['IndicatorType']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Indicator Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indicator Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indicators'), array('controller' => 'indicators', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indicator'), array('controller' => 'indicators', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Indicators'); ?></h3>
	<?php if (!empty($indicatorType['Indicator'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Indicator Type Id'); ?></th>
		<th><?php echo __('Campus Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($indicatorType['Indicator'] as $indicator): ?>
		<tr>
			<td><?php echo $indicator['id']; ?></td>
			<td><?php echo $indicator['item_id']; ?></td>
			<td><?php echo $indicator['indicator_type_id']; ?></td>
			<td><?php echo $indicator['campus_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'indicators', 'action' => 'view', $indicator['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'indicators', 'action' => 'edit', $indicator['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'indicators', 'action' => 'delete', $indicator['id']), array('confirm' => __('Are you sure you want to delete # %s?', $indicator['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Indicator'), array('controller' => 'indicators', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
