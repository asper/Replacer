<div class="replacerReplacements index">
	<h2><?php echo __d('replacer', 'Replacements');?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php echo __d('replacer', 'Actions');?></th>
		</tr>
		<?php foreach ($replacerReplacements as $replacerReplacement): ?>
			<tr>
				<td><?php echo h($replacerReplacement['ReplacerReplacement']['id']); ?>&nbsp;</td>
				<td><?php echo $this->Html->link($replacerReplacement['ReplacerReplacement']['name'], array('action' => 'view', $replacerReplacement['ReplacerReplacement']['id'])); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__d('replacer', 'View'), array('action' => 'view', $replacerReplacement['ReplacerReplacement']['id'])); ?>
					<?php echo $this->Html->link(__d('replacer', 'Edit'), array('action' => 'edit', $replacerReplacement['ReplacerReplacement']['id'])); ?>
					<?php echo $this->Form->postLink(__d('replacer', 'Delete'), array('action' => 'delete', $replacerReplacement['ReplacerReplacement']['id']), null, __d('replacer', 'Are you sure you want to delete # %s?', $replacerReplacement['ReplacerReplacement']['id'])); ?>
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
		<li><?php echo $this->Html->link(__d('replacer', 'New Replacement'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__d('replacer', 'List Scopes'), array('controller' => 'replacer_scopes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('replacer', 'New Scope'), array('controller' => 'replacer_scopes', 'action' => 'add')); ?> </li>
	</ul>
</div>
