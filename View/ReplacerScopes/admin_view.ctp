<div class="replacerScopes view">
	<h2><?php  echo __d('replacer', 'Scope');?></h2>
	<dl>
		<dt><?php echo __d('replacer', 'Id'); ?></dt>
		<dd>
			<?php echo h($replacerScope['ReplacerScope']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('replacer', 'Name'); ?></dt>
		<dd>
			<?php echo h($replacerScope['ReplacerScope']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('replacer', 'Pattern'); ?></dt>
		<dd>
			<?php echo h($replacerScope['ReplacerScope']['pattern']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __d('replacer', 'Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__d('replacer', 'Edit Scope'), array('action' => 'edit', $replacerScope['ReplacerScope']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__d('replacer', 'Delete Scope'), array('action' => 'delete', $replacerScope['ReplacerScope']['id']), null, __d('replacer', 'Are you sure you want to delete # %s?', $replacerScope['ReplacerScope']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('replacer', 'List Scopes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('replacer', 'New Scope'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('replacer', 'List Replacements'), array('controller' => 'replacer_replacements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('replacer', 'New Replacement'), array('controller' => 'replacer_replacements', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __d('replacer', 'Related Replacements');?></h3>
	<?php if (!empty($replacerScope['ReplacerReplacement'])):?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __d('replacer', 'Id'); ?></th>
				<th><?php echo __d('replacer', 'Name'); ?></th>
				<th class="actions"><?php echo __d('replacer', 'Actions');?></th>
			</tr>
			<?php
				$i = 0;
				foreach ($replacerScope['ReplacerReplacement'] as $replacerReplacement): ?>
				<tr>
					<td><?php echo $replacerReplacement['id'];?></td>
					<td><?php echo $this->Html->link($replacerReplacement['name'], array('controller' => 'replacer_replacements', 'action' => 'view', $replacerReplacement['id']));?></td>
					<td class="actions">
						<?php echo $this->Html->link(__d('replacer', 'View'), array('controller' => 'replacer_replacements', 'action' => 'view', $replacerReplacement['id'])); ?>
						<?php echo $this->Html->link(__d('replacer', 'Edit'), array('controller' => 'replacer_replacements', 'action' => 'edit', $replacerReplacement['id'])); ?>
						<?php echo $this->Form->postLink(__d('replacer', 'Delete'), array('controller' => 'replacer_replacements', 'action' => 'delete', $replacerReplacement['id']), null, __d('replacer', 'Are you sure you want to delete # %s?', $replacerReplacement['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__d('replacer', 'New Replacement'), array('controller' => 'replacer_replacements', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
