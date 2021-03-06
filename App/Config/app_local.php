<?php
// Custom overriding

$config = [

/**
 * Security and encryption configuration
 *
 * - salt - A random string used in security hashing methods.
 *   The salt value is also used as the encryption key.
 *   You should treat it as extremely sensitive data.
 */
	'Security' => [
		'salt' => '123456567890',
	],

	'FormConfig' => array(
		'templates' => array(
			'dateWidget' => '{{day}}{{month}}{{year}}{{hour}}{{minute}}{{second}}{{meridian}}',
		)
	)

];
