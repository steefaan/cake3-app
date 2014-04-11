<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Datasource\ConnectionManager;

class AppTable extends Table {

	/**
	 * initialize()
	 *
	 * @param mixed $config
	 * @return void
	 */
	public function initialize(array $config) {
		$this->addBehavior('Timestamp');
	}

	/**
	 * truncate()
	 *
	 * @return void
	 */
	public function truncate() {
		$sql = $this->schema()->truncateSql($this->_connection);
		foreach ($sql as $snippet) {
			$this->_connection->execute($snippet);
		}
	}

}
