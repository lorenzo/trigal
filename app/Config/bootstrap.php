<?php

Cache::config('default', array('engine' => 'File', 'path' => sys_get_temp_dir(), 'prefix' => 'trigal_'));

// Add logging configuration.
CakeLog::config('debug', array(
    'engine' => 'FileLog',
    'types' => array('notice', 'info', 'debug'),
    'path' => sys_get_temp_dir(),
    'file' => 'debug',
));
CakeLog::config('error', array(
    'engine' => 'FileLog',
    'types' => array('warning', 'error', 'critical', 'alert', 'emergency'),
    'file' => 'error',
    'path' => sys_get_temp_dir()
));


CakePlugin::load('Crud', array('bootstrap' => true, 'routes' => true));
CakePlugin::load('TwitterBootstrap');
CakePlugin::load('Utils');
CakePlugin::load('CakePdf', array('bootstrap' => true, 'routes' => true));
CakePlugin::load('DebugKit');


Configure::write('CakePdf', array(
	'engine' => 'CakePdf.WkHtmlToPdf',
	'binary' => APP . 'Vendor' . DS . 'wkhtmltopdf',
	'orientation' => 'Landscape'
));