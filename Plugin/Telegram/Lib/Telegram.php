<?php

namespace Telegram\Lib;

use Cake\Core\ClassLoader;
use Cake\Core\Plugin;

$x = new ClassLoader;
$x->register();
$x->addNamespace('Drupal', Plugin::path('Telegram') . 'vendor' . DS . 'Drupal');

use Drupal\telegram\TelegramLogger;
use Drupal\telegram\TelegramProcess;
use Drupal\telegram\TelegramClient;

/**
 * Define some defaults for system dependent variables.
 */
define('TELEGRAM_COMMAND', '/usr/local/bin/telegram');
define('TELEGRAM_KEYFILE', '/etc/telegram/server.pub');
define('TELEGRAM_CONFIG', '/etc/telegram/telegram.conf');
define('TELEGRAM_HOMEPATH', '/home/telegram');

// Log level (0 = Debug, 1 = Info, 2 = Notice, 3 = Warning, 4 = Error)
define('TELEGRAM_LOGLEVEL', 1);
define('TELEGRAM_LOGFILE', '/tmp/telegram.log');

class Telegram {

	/**
	 * Create telegram client.
	 */
	public function createClient($params = array()) {
	  $params += array(
	      'command' => TELEGRAM_COMMAND,
	      'keyfile' => TELEGRAM_KEYFILE,
	      'configfile' => TELEGRAM_CONFIG,
	      'homepath' => TELEGRAM_HOMEPATH,
	      'log_level' => TELEGRAM_LOGLEVEL,
	      'log_file' => TELEGRAM_LOGFILE,
	  );

	  $logger = new TelegramLogger($params);
	  $process = new TelegramProcess($params, $logger);
	  return new TelegramClient($process, $logger);
	}

}