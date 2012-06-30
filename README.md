Replacer
========

CakePHP output replacements

Setup
-----

* Clone repository in app/Plugin/Replacer (`git clone git://github.com/asper/Replacer.git`)
* Open `app/webroot/index.php` and search for :
	$Dispatcher->dispatch(new CakeRequest(), new CakeResponse(array('charset' => Configure::read('App.encoding'))));
* Replace with :
	App::import('Lib', 'Replacer.ReplacerResponse');
	$Dispatcher->dispatch(new CakeRequest(), new ReplacerResponse(array('charset' => Configure::read('App.encoding'))));
	
