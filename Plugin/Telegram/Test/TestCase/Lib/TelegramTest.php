<?php
namespace Telegram\Test\TestCase\Lib;

use Cake\TestSuite\TestCase;
use Telegram\Lib\Telegram;

/**
 * StringTest class
 *
 */
class StringTest extends TestCase {

	public function setUp() {
		parent::setUp();
		$this->Telegram = new Telegram();
	}

	public function tearDown() {
		parent::tearDown();
		unset($this->Text);
	}

	public function testContactList() {
		$Client = $this->Telegram->createClient();

		$contactList = $Client->getContactList();
		debug($contactList);
	}

	public function _testDialog() {
		$Client = $this->Telegram->createClient();

		$unreadMessages = $Client->getDialogList();
		debug($unreadMessages);
	}

}
