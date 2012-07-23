<div class="replacerReplacements form">
	<?php echo $this->Form->create('ReplacerReplacement');?>
	<fieldset>
		<legend><?php echo __d('replacer', 'Add Replacement'); ?></legend>
		<?php
		echo $this->Form->input('name');
		echo $this->Form->input('pattern', array(
			'type' => 'text'
		));
		echo $this->Form->input('replacement', array(
			'type' => 'text'
		));
		echo $this->Form->input('limit', array(
			'value' => -1
		));
		echo $this->Form->input('enabled');
		echo $this->Form->input('ReplacerScope');
		?>
	</fieldset>
	<?php echo $this->Form->end(__d('replacer', 'Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __d('replacer', 'Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__d('replacer', 'List Replacements'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__d('replacer', 'List Scopes'), array('controller' => 'replacer_scopes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__d('replacer', 'New Scope'), array('controller' => 'replacer_scopes', 'action' => 'add')); ?> </li>
	</ul>
</div>
