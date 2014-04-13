<?php
namespace App\Utility;

use Cake\Utility\Hash as BaseHash;

class Hash extends BaseHash {

	public static function flatten(array $data, $separator = '|') {
		return parent::flatten($data, $separator);
	}

	public function mergeInto(array $x, array $y) {
		return array_merge($x, $y);
	}

}