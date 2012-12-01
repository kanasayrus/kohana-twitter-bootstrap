<?php defined('SYSPATH') or die('No direct script access.');

// Static file serving (CSS, JS, images)
Route::set('twitterbootstrap/assets', 'twitter-bootstrap/assets(/<file>)', array('file' => '.+'))
	->defaults(array(
		'controller' => 'twitterbootstrap',
		'action'     => 'assets',
		'file'       => NULL,
	));