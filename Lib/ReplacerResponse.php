<?php

App::uses('Network', 'CakeResponse');
class ReplacerResponse extends CakeResponse {

	protected function _sendContent($content){
		echo ClassRegistry::init('Replacer.ReplacerReplacement')->replace($content);
	}	

}
