<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class CommentsTable extends AppTable {

	public function initialize(array $config) {
		$this->belongsTo('Articles');

		parent::initialize($config);
	}

}
