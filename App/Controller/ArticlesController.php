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

	/**
	 * @return void
	 */
	public function find() {
		$Articles = TableRegistry::get('Articles');

		$articles = $Articles->find()->contain(['Users']);

		$this->set(compact('articles'));
	}

}
