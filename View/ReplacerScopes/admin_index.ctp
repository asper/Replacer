<div class="replacerScopes index">
	<h2><?php echo __d('replacer', 'Scopes');?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php echo __d('replacer', 'Actions');?></th>
		</tr>
		<?php foreach ($replacerScopes as $replacerScope): ?>
			<tr>
				<td><?php echo h($replacerScope['ReplacerScope']['id']); ?>&nbsp;</td>
				<td><?php echo $this->Html->link($replacerScope['ReplacerScope']['name'], array('action' => 'view', $replacerScope['ReplacerScope']['id'])); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__d('replacer', 'View'), array('action' => 'view', $replacerScope['ReplacerScope']['id'])); ?>
					<?php echo $this->Html->link(__d('replacer', 'Edit'), array('action' => 'edit', $replacerScope['ReplacerScope']['id'])); ?>
					<?php echo $this->Form->postLink(__d('replacer', 'Delete'), array('action' => 'delete', $replacerScope['ReplacerScope']['id']), null, __d('replacer', 'Are you sure you want to delete # %s?', $replacerScope['ReplacerScope']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
	<p>
		<?php
		echo $this->Paginator->counter(array(
			'format' => __d('replacer', 'Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>
	</p>
	<div class="paging">
		<?php
		echo $this->Paginator->prev('< ' . __d('replacer', 'previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__d('replacer', 'next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __d('replacer', 'Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__d('replacer', 'New Scope'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__d('replacer', 'List Replacements'), array('controller' => 'replacer_replacements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('replacer', 'New Replacement'), array('controller' => 'replacer_replacements', 'action' => 'add')); ?> </li>
	</ul>
</div>