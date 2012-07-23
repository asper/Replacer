<?php

App::uses('ReplacerAppModel', 'Replacer.Model');

class ReplacerScope extends ReplacerAppModel {
	
	var $hasAndBelongsToMany = array(
		'Replacer.ReplacerReplacement'
	);
	
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => 'notempty'
			)
		),
		'pattern' => array(
			'notempty' => array(
				'rule' => 'notempty'
			)
		)
	);
	
	public function __construct($id = false, $table = NULL, $ds = NULL){
		$this->validate['name']['notempty']['message'] = __d('replacer', 'Field required');
		$this->validate['pattern']['notempty']['message'] = __d('replacer', 'Field required');
		parent::__construct($id, $table, $ds);
	}
	
}
