<?php
namespace Bleicker\Context;

use Bleicker\Container\Exception\AliasAlreadyExistsException;

/**
 * Class Context
 *
 * @package Bleicker\Context
 */
interface ContextInterface {

	const APPLICATION_CONTEXT = 'applicationContext',
		APPLICATION_CONTEXT_ENV_VAR = 'CONTEXT',
		DOMAIN_CONTEXT = 'domainContext',
		DOMAIN_CONTEXT_ENV_VAR = 'DOMAIN',
		PRODUCTION = 'production',
		DEVELOPMENT = 'development',
		TESTING = 'testing';

	/**
	 * @return array
	 */
	public static function storage();

	/**
	 * @param string $alias
	 * @return boolean
	 */
	public static function has($alias);

	/**
	 * @param string $alias
	 * @param mixed $data
	 * @return static
	 * @throws AliasAlreadyExistsException
	 */
	public static function add($alias, $data);

	/**
	 * @return static
	 */
	public static function prune();

	/**
	 * @param string $alias
	 * @return mixed
	 */
	public static function get($alias);

	/**
	 * @param string $alias
	 * @return static
	 */
	public static function remove($alias);
}