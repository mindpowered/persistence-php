<?php
namespace mindpowered\wrappers;

use \maglev\MagLevPhp;

/**
 * PersistencePhpWrapper
 *
 * Copyright Mind Powered Corporation 2020
 */


/**
 * PersistencePhpWrapper
 *
 * This is a class
 */
class PersistencePhpWrapper
{
/**
 * TBD
 * @return void
 */
public function AddMutator()
{
	$bus = MagLevPhp::getInstance('default');
	$args = [];
	$ret = $bus->call('Persistence.AddMutator', $args);
	return $ret;
}

/**
 * TBD
 * @return void
 */
public function AddGetter()
{
	$bus = MagLevPhp::getInstance('default');
	$args = [];
	$ret = $bus->call('Persistence.AddGetter', $args);
	return $ret;
}

/**
 * TBD
 * @return void
 */
public function Mutate()
{
	$bus = MagLevPhp::getInstance('default');
	$args = [];
	$ret = $bus->call('Persistence.Mutate', $args);
	return $ret;
}

/**
 * TBD
 * @return void
 */
public function Get()
{
	$bus = MagLevPhp::getInstance('default');
	$args = [];
	$ret = $bus->call('Persistence.Get', $args);
	return $ret;
}

}
