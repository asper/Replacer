<div class="replacer replacer index">
	<h2><?php echo __d('replacer', 'Replacer'); ?></h2>
</div>
<div class="actions">
	<h3><?php echo __d('cake', 'Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__d('replacer', 'Replacements'), array('controller' => 'replacer_replacements', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__d('replacer', 'Scopes'), array('controller' => 'replacer_scopes', 'action' => 'index')); ?></li>
	</ul>
</div>
