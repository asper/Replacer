<?php

App::uses('ReplacerAppModel', 'Replacer.Model');

class ReplacerReplacement extends ReplacerAppModel {

	public $actsAs = array(
		'Containable'
	);
	
	public $hasAndBelongsToMany = array(
		'Replacer.ReplacerScope'
	);

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
				$content = preg_replace($replacement['ReplacerReplacement']['pattern'], $replacement['ReplacerReplacement']['replacement'], $replacement['ReplacerReplacement']['limit']);
			}
		}
		return $content;
	}
	
}
