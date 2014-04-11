<?php
/**
 */
namespace App\Controller;

use App\Controller\AppController;
use Cake\Error;
use Cake\Utility\Debugger;

/**
 */
class TestsController extends AppController {

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
	}

	/**
	 * https://github.com/cakephp/cakephp/pull/2975
	 *
	 * @return void
	 */
	public function debug() {
		debug($this);

		$this->autoRender = false;
	}

/**
 * Returns an array that can be used to describe the internal state of this
 * object.
 *
 * @return array
 */
	public function __debugInfo() {
		return [
			'environment' => $this->_environment
		];
	}

}
