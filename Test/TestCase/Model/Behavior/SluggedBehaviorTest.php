<?php

namespace App\Test\TestCase\Model\Behavior;

use Cake\Database\Query;
use Cake\Datasource\ConnectionManager;
use Cake\Event\Event;
use Cake\ORM\Entity;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Cake\Core\Configure;

/**
 * SluggedBehaviorTest
 */
class SluggedBehaviorTest extends TestCase {

/**
 * Fixture
 *
 * @var array
 */
	public $fixtures = [
		'app.slugged_article',
	];

/**
 * setup
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->connection = ConnectionManager::get('test');

		$options = ['alias' => 'Articles'];
		$this->articles = TableRegistry::get('SluggedArticles', $options);

		Configure::delete('Slugged');
	}

/**
 * teardown
 *
 * @return void
 */
	public function tearDown() {
		unset($this->articles);

 		TableRegistry::clear();
 		parent::tearDown();
	}

/**
 * Testing simple slugging when adding a record
 *
 * @return void
 */
	public function testAdd() {
		$this->articles->addBehavior('Slugged');

		$entity = $this->_getEntity();
		$result = $this->articles->save($entity);

		$this->assertEquals('test-123', $result->get('slug'));
	}

/**
 * Testing simple slugging when adding a record
 *
 * @return void
 */
	public function testAddUnique() {
		$this->articles->addBehavior('Slugged', ['unique' => true]);

		$entity = $this->_getEntity();
		$result = $this->articles->save($entity);
		$this->assertEquals('test-123', $result->get('slug'));

		//$entity = $this->_getEntity();
		//$result = $this->articles->save($entity);
		//$this->assertEquals('test-123', $result->get('slug'));
		//debug($result);
	}

/**
 * SluggedBehaviorTest::testCustomFinder()
 *
 * @return void
 */
	public function testCustomFinder() {
		$this->articles->addBehavior('Slugged');
		$article = $this->articles->find()->find('slugged', ['slug' => 'foo'])->first();
		$this->assertEquals('Foo', $article->get('title'));
	}

/**
 * Get a new Entity
 *
 * @return Entity
 */
	protected function _getEntity() {
		return new Entity([
			'title' => 'test 123'
		]);
	}

}
