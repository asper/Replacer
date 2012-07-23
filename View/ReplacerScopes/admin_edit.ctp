<div class="replacerScopes form">
	<?php echo $this->Form->create('ReplacerScope');?>
	<fieldset>
		<legend><?php echo __d('replacer', 'Edit Scope'); ?></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('pattern', array(
			'type' => 'text'
		));
		echo $this->Form->input('ReplacerReplacement');
		?>
	</fieldset>
	<?php echo $this->Form->end(__d('replacer', 'Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __d('replacer', 'Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__d('replacer', 'Delete'), array('action' => 'delete', $this->Form->value('ReplacerScope.id')), null, __d('replacer', 'Are you sure you want to delete # %s?', $this->Form->value('ReplacerScope.id'))); ?></li>
		<li><?php echo $this->Html->link(__d('replacer', 'List Scopes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__d('replacer', 'List Replacements'), array('controller' => 'replacer_replacements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('replacer', 'New Replacement'), array('controller' => 'replacer_replacements', 'action' => 'add')); ?> </li>
	</ul>
</div>
