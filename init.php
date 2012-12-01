<?php defined('SYSPATH') or die('No direct script access.');

// Static file serving (CSS, JS, images)
Route::set('docs/media', 'bootstrap/assets(/<file>)', array('file' => '.+'))
	->defaults(array(
		'controller' => 'bootstrap',
		'action'     => 'assets',
		'file'       => NULL,
	));