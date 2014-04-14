<?php
namespace App\View\Helper;

use Cake\View\Helper\FormHelper as CakeFormHelper;
use Cake\View\View;
use Cake\Core\Configure;
use Cake\Utility\Hash;

/**
 * Overwrite
 *
 */
class FormHelper extends CakeFormHelper {

/**
 * Construct the widgets and binds the default context providers
 *
 * @param \Cake\View\View $View The View this helper is being attached to.
 * @param array $config Configuration settings for the helper.
 */
	public function __construct(View $View, array $config = []) {
		$defaulConfig = (array)Configure::read('FormConfig');
		if ($defaulConfig) {
			$this->_defaultConfig = Hash::merge($this->_defaultConfig, $defaulConfig);
		}
		parent::__construct($View, $config);
	}

}
