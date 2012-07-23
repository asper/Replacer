<?php

App::uses('Network', 'CakeResponse');
App::uses('ClassRegistry', 'Utility');

class ReplacerResponse extends CakeResponse {

	protected function _sendContent($content){
		echo ClassRegistry::init('Replacer.ReplacerReplacement', true)->replace($content);
	}	

}
