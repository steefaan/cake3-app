<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Utility\Number;

use App\Model\Entity\Article;
use App\Model\Entity\Comment;

/**
 * Test articles table
 */
class ArticlesController extends AppController {

	/**
	 * ArticlesController::index()
	 *
	 * @return void
	 */
	public function index() {

	}

	/**
	 * Test how entity works with forms and field.
	 *
	 * @return void
	 */
	public function add() {
		$articlesTable = TableRegistry::get('Articles');
		$article = $articlesTable->newEntity();
		$this->set(compact('article'));
	}

	/**
	 * Test how it works with entity + custom fields.
	 *
	 * @return void
	 */
	public function form() {
		$articlesTable = TableRegistry::get('Articles');
		$article = $articlesTable->newEntity();
		$this->set(compact('article'));
	}

	/**
	 * @return void
	 */
	public function save() {
		$users = TableRegistry::get('Users');
		$result = $users->truncate();

		$data = array(
			'username' => 'xx yy',
		);
		$user = $users->newEntity($data);

		if (!($result = $users->save($user))) {
			throw new CakeException();
		}
		$id = $result->id;

		$articles = TableRegistry::get('Articles');

		$data = array(
			'name' => 'xx',
			'content' => 'yy',
			'publish_date' => time(),
			'user_id' => $id
		);
		$article = $articles->newEntity($data);
		$article->comments = [
			new Comment(['title' => 'foo', 'content' => 'Best post ever']),
			new Comment(['title' => 'bar', 'content' => 'I really like this.']),
		];

		if (!$articles->save($article)) {
			throw new CakeException();
		}
	}

	public function slug() {
		$Articles = TableRegistry::get('Articles');

		$article = $Articles->find()->find('slugged', ['slug' => 'foo'])->first();
		debug($article);
		die();
	}

	/**
	 * @return void
	 */
	public function find() {
		$Articles = TableRegistry::get('Articles');

		$articles = $Articles->find()->contain(['Users']);

		$this->set(compact('articles'));
	}

}
