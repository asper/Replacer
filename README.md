Replacer
========

CakePHP output replacements

Setup
-----

1) Clone repository :

	$ cd /my/app/root && git clone git://github.com/asper/Replacer.git Plugin/Replacer

2) Load plugin in `app/Config/bootstrap.php`  :

	CakePlugin::load(array(
		'Replacer' => array(
			'routes' => true
		)
	));
	
3) Load schema :

	$ cd /my/app/root && cake shema create replacer.replacer
	
4) Create schema :

	$ cd /my/app/root && cake shema create replacer.replacer

5) Open `app/webroot/index.php` and search for (l. 96 for CakePHP 2.1) :

	$Dispatcher->dispatch(new CakeRequest(), new CakeResponse(array('charset' => Configure::read('App.encoding'))));
	
6) Replace this line with :

	App::import('Lib', 'Replacer.ReplacerResponse');
	$Dispatcher->dispatch(new CakeRequest(), new ReplacerResponse(array('charset' => Configure::read('App.encoding'))));
	
7) Enable `admin` routing prefix by uncommenting `Configure::write('Routing.prefixes', array('admin'));` in `app/Config/core.php`
	
8) Navigate to `http://my-app/admin/replacer` and start configuring the plugin
	
