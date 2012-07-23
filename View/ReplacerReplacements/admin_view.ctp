<div class="replacerReplacements view">
	<h2><?php  echo __d('replacer', 'Replacement');?></h2>
	<dl>
		<dt><?php echo __d('replacer', 'Id'); ?></dt>
		<dd>
			<?php echo h($replacerReplacement['ReplacerReplacement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('replacer', 'Name'); ?></dt>
		<dd>
			<?php echo h($replacerReplacement['ReplacerReplacement']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('replacer', 'Pattern'); ?></dt>
		<dd>
			<?php echo h($replacerReplacement['ReplacerReplacement']['pattern']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('replacer', 'Replacement'); ?></dt>
		<dd>
			<?php echo h($replacerReplacement['ReplacerReplacement']['replacement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('replacer', 'Limit'); ?></dt>
		<dd>
			<?php echo h($replacerReplacement['ReplacerReplacement']['limit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __d('replacer', 'Enabled'); ?></dt>
		<dd>
			<?php echo h($replacerReplacement['ReplacerReplacement']['enabled']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __d('replacer', 'Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__d('replacer', 'Edit Replacement'), array('action' => 'edit', $replacerReplacement['ReplacerReplacement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__d('replacer', 'Delete Replacement'), array('action' => 'delete', $replacerReplacement['ReplacerReplacement']['id']), null, __d('replacer', 'Are you sure you want to delete # %s?', $replacerReplacement['ReplacerReplacement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__d('replacer', 'List Replacements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('replacer', 'New Replacement'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__d('replacer', 'List Scopes'), array('controller' => 'replacer_scopes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('replacer', 'New Scope'), array('controller' => 'replacer_scopes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __d('replacer', 'Related Replacer Scopes');?></h3>
	<?php if (!empty($replacerReplacement['ReplacerScope'])):?>
		<table cellpadding = "0" cellspacing = "0">
			<tr>
				<th><?php echo __d('replacer', 'Id'); ?></th>
				<th><?php echo __d('replacer', 'Name'); ?></th>
				<th class="actions"><?php echo __d('replacer', 'Actions');?></th>
			</tr>
			<?php $i = 0; ?>
			<?php foreach ($replacerReplacement['ReplacerScope'] as $replacerScope): ?>
				<tr>
					<td><?php echo $replacerScope['id'];?></td>
					<td><?php echo $this->Html->link($replacerScope['name'], array('controller' => 'replacer_scopes', 'action' => 'view', $replacerScope['id'])); ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__d('replacer', 'View'), array('controller' => 'replacer_scopes', 'action' => 'view', $replacerScope['id'])); ?>
						<?php echo $this->Html->link(__d('replacer', 'Edit'), array('controller' => 'replacer_scopes', 'action' => 'edit', $replacerScope['id'])); ?>
						<?php echo $this->Form->postLink(__d('replacer', 'Delete'), array('controller' => 'replacer_scopes', 'action' => 'delete', $replacerScope['id']), null, __d('replacer', 'Are you sure you want to delete # %s?', $replacerScope['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__d('replacer', 'New Scope'), array('controller' => 'replacer_scopes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
