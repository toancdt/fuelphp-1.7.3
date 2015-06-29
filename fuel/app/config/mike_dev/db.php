<?php
/**
 * The mike_dev database settings. These get merged with the global settings.
 */

return array(
    'active' => 'default',
	'default' => array(
	    'type'          => 'mysqli',
		'connection'    => array(
		    'hostname'      => 'localhost',
		    'port'          => '3306',
		    'database'      => 'fuel_mike_dev',
			'username'      => 'root',
			'password'      => 'root',
		    'persistent'    => false,
		    'compress'      => false,
		),
	    'identifier'    =>'`',
	    'table_prefix'  => '',
	    'charset'       => 'utf8',
	    'enable_cache'  => true,
	    'profiling'     => false,
	    'readonly'      => false,
	),
    'dbtest' => array(
        'type'          => 'mysqli',
        'connection'    => array(
            'hostname'      => 'localhost',
            'port'          => '3306',
            'database'      => 'test',
            'username'      => 'root',
            'password'      => 'root',
            'persistent'    => false,
            'compress'      => false,
        ),
        'identifier'    =>'`',
        'table_prefix'  => '',
        'charset'       => 'utf8',
        'enable_cache'  => true,
        'profiling'     => false,
        'readonly'      => false,
    ),
);
