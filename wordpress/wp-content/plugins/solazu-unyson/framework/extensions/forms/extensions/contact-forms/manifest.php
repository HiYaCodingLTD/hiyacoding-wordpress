<?php if (!defined('SLZ')) die('Forbidden');

$manifest = array();

$manifest['name'] = __('Contact Forms', 'slz');
$manifest['version'] = '1.0.1';
$manifest['standalone'] = true;
$manifest['display'] = false;
$manifest['requirements']  = array(
	'extensions' => array(
		'mailer' => array(),
	),
);