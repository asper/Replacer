Replacer
========

CakePHP output replacements

Setup
-----

1) Clone repository in app/Plugin/Replacer (`git clone git://github.com/asper/Replacer.git`)

2) Open `app/webroot/index.php` and search for :

	$Dispatcher->dispatch(new CakeRequest(), new CakeResponse(array('charset' => Configure::read('App.encoding'))));
	
3) Replace with :

	App::import('Lib', 'Replacer.ReplacerResponse');
	$Dispatcher->dispatch(new CakeRequest(), new ReplacerResponse(array('charset' => Configure::read('App.encoding'))));
	
