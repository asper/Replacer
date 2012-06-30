<?php

Router::connect('/admin/replacer/replacements', array(
	'admin' => true,
	'plugin' => 'replacer',
	'controller' => 'replacer_replacements',
	'action' => 'index'
));

Router::connect('/admin/replacer/replacements/*', array(
	'admin' => true,
	'plugin' => 'replacer',
	'controller' => 'replacer_replacements'
));

Router::connect('/admin/replacer/scopes', array(
	'admin' => true,
	'plugin' => 'replacer',
	'controller' => 'replacer_scopes',
	'action' => 'index'
));

Router::connect('/admin/replacer/scopes/*', array(
	'admin' => true,
	'plugin' => 'replacer',
	'controller' => 'replacer_scopes'
));
