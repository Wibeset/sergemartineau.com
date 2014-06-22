<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

require 'vendor/autoload.php';

use Philo\Blade\Blade;

$dir   = [
	'views' => __DIR__ . '/../views',
	'cache' => __DIR__ . '/../cache',
	'dist'  => __DIR__ . '/../dist'
];

$views = [
	'index',
	'realisations',
	'services',
	'apropos',
	'contact'
];

$blade = new Blade($dir['views'], $dir['cache']);

$blade->view()->share([
	'version' => time()
]);

foreach ($views as $view) {

	$html = $blade->view()->make($view);

	$blade->view()->share([
		'page' => $view
	]);

	file_put_contents($dir['dist'] . '/' . $view . '.html', $html);
}