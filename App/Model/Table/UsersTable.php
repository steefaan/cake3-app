<?php

namespace App\Model\Table;

class UsersTable extends AppTable {

	/**
	 * UsersTable::initialize()
	 *
	 * @param mixed $config
	 * @return void
	 */
	public function initialize(array $config) {
		$this->displayField('username');

		$this->hasMany('Articles');

		parent::initialize($config);
	}

}
