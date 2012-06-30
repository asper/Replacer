<?php

class ReplacerSchema extends CakeSchema {

	var $replacer_replacements = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => '', 'key' => 'primary'),
		'name' => array('type' => 'string', 'length' => '45', 'null' => false, 'default' => ''),
		'pattern' => array('type' => 'text', 'null' => false, 'default' => ''),
		'replacement' => array('type' => 'text', 'null' => true, 'default' => ''),
		'limit' => array('type' => 'integer', 'null' => true, 'default' => '-1'),
		'enabled' => array('type' => 'boolean', 'null' => true, 'default' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $replacer_scopes = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => '', 'key' => 'primary'),
		'name' => array('type' => 'string', 'length' => '45', 'null' => false, 'default' => ''),
		'pattern' => array('type' => 'text', 'null' => false, 'default' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

	var $replacer_replacements_replacer_scopes = array(
		'replacer_replacement_id' => array('type' => 'integer', 'null' => false, 'default' => ''),
		'replacer_scope_id' => array('type' => 'integer', 'null' => false, 'default' => ''),
	);
	
}

