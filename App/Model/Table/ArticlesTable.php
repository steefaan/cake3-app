<?php

namespace App\Model\Table;

class ArticlesTable extends AppTable {

	/**
	 * ArticlesTable::belongsTo()
	 *
	 * @param mixed $associated
	 * @param mixed $options
	 * @return void
	 */
	public function belongsTo($associated, array $options = []) {
		$options += [
			//'foreignKey' => '';
		];
		parent::belongsTo($associated, $options);
	}

	/**
	 * ArticlesTable::initialize()
	 *
	 * @param mixed $config
	 * @return void
	 */
	public function initialize(array $config) {
		$this->belongsTo('Users');
		$this->hasMany('Comments');

		$this->addBehavior('Slugged');

		parent::initialize($config);
	}

}
