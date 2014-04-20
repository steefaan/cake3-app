<?php

/**
 * Connection information used by the ORM to connect
 * to your application's datastores.
 */
$config = [
	'Datasources' => [
		'default' => [
			'className' => 'Cake\Database\Connection',
			'driver' => 'Cake\Database\Driver\Mysql',
			'persistent' => false,
			'host' => 'localhost',
			'login' => 'my_app',
			'password' => 'secret',
			'database' => 'my_app',
			'prefix' => false,
			'encoding' => 'utf8',
			'timezone' => 'UTC'
		],

		/**
		 * The test connection is used during the test suite.
		 */
		'test' => [
			'className' => 'Cake\Database\Connection',
			'driver' => 'Cake\Database\Driver\Mysql',
			'persistent' => false,
			'host' => 'localhost',
			'login' => 'my_app',
			'password' => 'secret',
			'database' => 'test_myapp',
			'prefix' => false,
			'encoding' => 'utf8',
			'timezone' => 'UTC'
		],
	],
];