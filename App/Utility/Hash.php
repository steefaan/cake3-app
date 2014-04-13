<?php
namespace App\Utility;

use Cake\Utility\Hash as BaseHash;

class Hash extends BaseHash {

	/**
	 * Overwrite existing method
	 */
	public static function flatten(array $data, $separator = '|') {
		return parent::flatten($data, $separator);
	}

	/**
	 * New method
	 */
	public static function mergeInto(array $x, array $y) {
		return array_merge($x, $y);
	}

}