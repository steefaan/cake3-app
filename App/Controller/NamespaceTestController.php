<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Utility\Hash;

/**
 */
class NamespaceTestController extends AppController {

	/**
	 * This controller does not use a model
	 *
	 * @var array
	 */
	public $uses = array();

	/**
	 * @return void
	 */
	public function index() {
		// Should now return `'x|y' => 'z'`
		$result = Hash::flatten(array('x' => array('y' => 'z')));
		debug($result);

		// Should result in array('x', 'y', 'z')
		$result = Hash::merge(array('x', 'y'), array('z'));
		debug($result);

		$this->autoRender = false;
	}

}
