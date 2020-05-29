<?php
/**
 * Generated by Haxe 4.0.0
 */

use \php\Boot;

class IntIterator {
	/**
	 * @var int
	 */
	public $max;
	/**
	 * @var int
	 */
	public $min;


	/**
	 * @param int $min
	 * @param int $max
	 * 
	 * @return void
	 */
	public function __construct ($min, $max) {
		#/usr/share/haxe/std/IntIterator.hx:47: characters 2-16
		$this->min = $min;
		#/usr/share/haxe/std/IntIterator.hx:48: characters 2-16
		$this->max = $max;
	}


	/**
	 * @return bool
	 */
	public function hasNext () {
		#/usr/share/haxe/std/IntIterator.hx:55: characters 2-18
		return $this->min < $this->max;
	}


	/**
	 * @return int
	 */
	public function next () {
		#/usr/share/haxe/std/IntIterator.hx:64: characters 2-14
		return $this->min++;
	}
}


Boot::registerClass(IntIterator::class, 'IntIterator');
