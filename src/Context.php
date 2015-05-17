<?php

namespace Bleicker\Context;

use Bleicker\Container\AbstractContainer;

/**
 * Class Context
 *
 * @package Bleicker\Context
 */
class Context extends AbstractContainer implements ContextInterface {

	/**
	 * @var array
	 */
	public static $storage = [];
}
