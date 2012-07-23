<div class="replacerReplacements form">
	<?php echo $this->Form->create('ReplacerReplacement');?>
	<fieldset>
		<legend><?php echo __d('replacer', 'Edit Replacement'); ?></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('pattern');
		echo $this->Form->input('replacement');
		echo $this->Form->input('limit');
		echo $this->Form->input('enabled');
		echo $this->Form->input('ReplacerScope');
		?>
	</fieldset>
	<?php echo $this->Form->end(__d('replacer', 'Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __d('replacer', 'Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__d('replacer', 'Delete'), array('action' => 'delete', $this->Form->value('ReplacerReplacement.id')), null, __d('replacer', 'Are you sure you want to delete # %s?', $this->Form->value('ReplacerReplacement.id'))); ?></li>
		<li><?php echo $this->Html->link(__d('replacer', 'List Replacements'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__d('replacer', 'List Scopes'), array('controller' => 'replacer_scopes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('replacer', 'New Scope'), array('controller' => 'replacer_scopes', 'action' => 'add')); ?> </li>
	</ul>
</div>
