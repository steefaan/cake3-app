<?php
namespace App\Model\Entity;

class Article extends AppEntity {

	public function setName($title) {
		return ucfirst($title);
	}

}