<?php

namespace Tests\Bleicker\Context;

use Bleicker\Context\Context;

/**
 * Class ContextTest
 *
 * @package Tests\Bleicker\Context
 */
class ContextTest extends UnitTestCase {

	protected function tearDown() {
		parent::tearDown();
		Context::prune();
	}

	/**
	 * @test
	 */
	public function applicationContextTest() {
		Context::add(Context::APPLICATION_CONTEXT, Context::DEVELOPMENT);
		$this->assertEquals(Context::DEVELOPMENT, Context::get(Context::APPLICATION_CONTEXT));
	}

	/**
	 * @test
	 */
	public function hiddenContextTest() {
		Context::add('showHiddenRecords', TRUE);
		$this->assertTrue(Context::get('showHiddenRecords'));
	}
}
