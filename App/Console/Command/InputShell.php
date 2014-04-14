<?php

namespace App\Console\Command;

use Cake\Console\ConsoleOptionParser;
use App\Console\Command\AppShell;

/**
 * Simple console wrapper around Boris.
 */
class InputShell extends AppShell {

/**
 * Start the shell and interactive console.
 *
 * @return void
 */
	public function main() {
		$this->out('Test Input');
		$result = $this->in('Foo?', array('n', 'y'), 'y');
		$this->out('You said: ' . $result);

		$this->hr();
		$this->out('Time: ' . time());
		for ($i = 1; $i < 10; $i++) {
			sleep(1);
			$this->_io->overwrite('Time: ' . time());
		}
		$this->out('Done');
	}

/**
 * Display help for this console.
 *
 * @return ConsoleOptionParser
 */
	public function getOptionParser() {
		$parser = new ConsoleOptionParser('console', false);
		$parser->description(
			'x'
		);
		return $parser;
	}

}
