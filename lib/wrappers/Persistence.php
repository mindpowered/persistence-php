<?php
namespace mindpowered\persistence;

use \maglev\MagLev;
use \maglev\MagLevPhp;
use \persistence\Persistence as Persistence_Library;

/**
 * Copyright Mind Powered Corporation 2020
 * 
 * https://mindpowered.dev/
 */


/**
 * Provides a way of storing data for mindpowered packages.
 * When mindpowered packages need to persist data, they will use Get and Mutate, which in turn will call the Mutators and Getters you have set up.
 * You can set up the Mutators and Getters however you like whether to access a database such as MySQL or MongoDB, or simply write and read from text files.
 * Note: when using a mapping (updateMapper, queryMapper, resultMapper), the data will be passed in as the first argument to the mapping function.
 */
class Persistence
{
	/**
	 * Persistence
	 */
	function __construct() {
		$bus = MagLev::getInstance('persistence');
		$lib = new Persistence_Library($bus);
	}

	/**
	 * Set up a Mutator to change stored data
	 * @param string $recordType type of record being changed (eg. databsae table name)
	 * @param string $operationName action being performed on the record (eg. insert, update)
	 * @param mixed $strategyMethod method to call to actually perform the mutation
	 * @param mixed $updateMapper method to call on recordData before calling strategyMethod with the results
	 * @param bool $useRecordDataAsParams if set to true, the recordData will be passed as the arguments to strategyMethod, rather than as the first argument
	 * @return void
	 */
	public function AddMutator($recordType, $operationName, $strategyMethod, $updateMapper, $useRecordDataAsParams)
	{
		$phpbus = MagLevPhp::getInstance('persistence');
		$args = [$recordType, $operationName, $strategyMethod, $updateMapper, $useRecordDataAsParams];
		$phpbus->call('Persistence.AddMutator', $args, function($async_ret){});
	}

	/**
	 * Set up a Getter to retrieve data
	 * @param string $recordType type of record being retrieved (eg. databsae table name)
	 * @param string $operationName query being performed for the record type (eg. findById, findByName, findActive, getInsertedId)
	 * @param mixed $strategyMethod method to call to actually perform the data retrieval
	 * @param mixed $queryMapper method to call on queryValues before calling strategyMethod with the results
	 * @param mixed $resultMapper method to call on data returned from the strategyMethod before returning the results
	 * @param bool $useQueryValuesAsParams if set to true, the queryValues will be passed as the arguments to strategyMethod, rather than as the first argument
	 * @return void
	 */
	public function AddGetter($recordType, $operationName, $strategyMethod, $queryMapper, $resultMapper, $useQueryValuesAsParams)
	{
		$phpbus = MagLevPhp::getInstance('persistence');
		$args = [$recordType, $operationName, $strategyMethod, $queryMapper, $resultMapper, $useQueryValuesAsParams];
		$phpbus->call('Persistence.AddGetter', $args, function($async_ret){});
	}

	/**
	 * Use a Mutator to change stored data
	 * @param string $recordType type of record being changed (eg. databsae table name)
	 * @param string $operationName action being performed on the record (eg. insert, update)
	 * @param mixed $recordData data being updated or saved by passing through updateMapper and then strategyMethod
	 * @return void
	 */
	public function Mutate($recordType, $operationName, $recordData)
	{
		$phpbus = MagLevPhp::getInstance('persistence');
		$args = [$recordType, $operationName, $recordData];
		$phpbus->call('Persistence.Mutate', $args, function($async_ret){});
	}

	/**
	 * Use a Getter to retrieve data
	 * @param string $recordType type of record being retrieved (eg. databsae table name)
	 * @param string $operationName query being performed for the record type (eg. findById, findByName, findActive, getInsertedId)
	 * @param mixed $queryValues values that will be passed through queryMapper and then strategyMethod to perform the query
	 * @return mixed result from the getter after being passed through resultMapper
	 */
	public function Get($recordType, $operationName, $queryValues)
	{
		$phpbus = MagLevPhp::getInstance('persistence');
		$args = [$recordType, $operationName, $queryValues];
		$ret = null;
		$phpbus->call('Persistence.Get', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

}
