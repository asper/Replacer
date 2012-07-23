<?php

App::uses('ReplacerAppModel', 'Replacer.Model');

class ReplacerReplacement extends ReplacerAppModel {

	public $actsAs = array(
		'Containable'
	);
	
	public $hasAndBelongsToMany = array(
		'Replacer.ReplacerScope'
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
		),
		'limit' => array(
			'numeric' => array(
				'rule' => 'numeric',
				'allowEmpty' => true
			),
			'comparison' => array(
				'rule' => array('comparison', '>=', -1),
				'allowEmpty' => true
			)
		)
	);
	
	public function __construct($id = false, $table = NULL, $ds = NULL){
		$this->validate['name']['notempty']['message'] = __d('replacer', 'Field required');
		$this->validate['pattern']['notempty']['message'] = __d('replacer', 'Field required');
		$this->validate['limit']['numeric']['message'] = __d('replacer', 'Only numeric values are allowed');
		$this->validate['limit']['comparison']['message'] = __d('replacer', 'Value must be greater or equal to -1');
		parent::__construct($id, $table, $ds);
	}

	public function replace($content = null){
		if(!$content){
			return $content;
		}
		$replacements = $this->find('all', array(
			'conditions' => array(
				'ReplacerReplacement.enabled' => 1
			),
			'fields' => array(
				'ReplacerReplacement.pattern',
				'ReplacerReplacement.replacement',
				'ReplacerReplacement.limit'
			),
			'contain' => array(
				'ReplacerScope' => array(
					'fields' => array(
						'ReplacerScope.pattern'
					)
				)
			)
		));
		foreach($replacements as $replacement){
			if(!empty($replacement['ReplacerScope'])){
				foreach($replacement['ReplacerScope'] as $scope){
					$content = preg_replace_callback(
						$scope['pattern'], 
						create_function(
							'$matches',
							'return preg_replace("'.$replacement['ReplacerReplacement']['pattern'].'", "'.$replacement['ReplacerReplacement']['replacement'].'", $matches[0], '.$replacement['ReplacerReplacement']['limit'].');'
						),
						$content
					);
				}
			}
			else {
				$content = preg_replace($replacement['ReplacerReplacement']['pattern'], $replacement['ReplacerReplacement']['replacement'], $content, $replacement['ReplacerReplacement']['limit']);
			}
		}
		return $content;
	}
	
}
