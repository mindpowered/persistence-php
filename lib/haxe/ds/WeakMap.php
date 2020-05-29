<?php
/**
 * Generated by Haxe 4.0.0
 */

namespace haxe\ds;

use \haxe\IMap;
use \php\Boot;
use \php\_Boot\HxException;

class WeakMap implements IMap {
	/**
	 * @return void
	 */
	public function __construct () {
		#/usr/share/haxe/std/haxe/ds/WeakMap.hx:40: characters 2-7
		throw new HxException("Not implemented for this platform");
	}


	/**
	 * @param mixed $key
	 * 
	 * @return bool
	 */
	public function exists ($key) {
		#/usr/share/haxe/std/haxe/ds/WeakMap.hx:60: characters 2-14
		return false;
	}


	/**
	 * @param mixed $key
	 * 
	 * @return mixed
	 */
	public function get ($key) {
		#/usr/share/haxe/std/haxe/ds/WeakMap.hx:53: characters 2-13
		return null;
	}


	/**
	 * @return object
	 */
	public function iterator () {
		#/usr/share/haxe/std/haxe/ds/WeakMap.hx:81: characters 2-13
		return null;
	}


	/**
	 * @return object
	 */
	public function keys () {
		#/usr/share/haxe/std/haxe/ds/WeakMap.hx:74: characters 2-13
		return null;
	}


	/**
	 * @param mixed $key
	 * 
	 * @return bool
	 */
	public function remove ($key) {
		#/usr/share/haxe/std/haxe/ds/WeakMap.hx:67: characters 2-14
		return false;
	}


	/**
	 * @param mixed $key
	 * @param mixed $value
	 * 
	 * @return void
	 */
	public function set ($key, $value) {
	}


	/**
	 * @return string
	 */
	public function toString () {
		#/usr/share/haxe/std/haxe/ds/WeakMap.hx:88: characters 2-13
		return null;
	}


	public function __toString() {
		return $this->toString();
	}
}


Boot::registerClass(WeakMap::class, 'haxe.ds.WeakMap');
