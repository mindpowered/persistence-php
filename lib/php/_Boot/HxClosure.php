<?php
/**
 * Generated by Haxe 4.0.0
 */

namespace php\_Boot;

use \php\Boot;

class HxClosure {
	/**
	 * @var string
	 */
	public $func;
	/**
	 * @var mixed
	 */
	public $target;


	/**
	 * @param mixed $target
	 * @param string $func
	 * 
	 * @return void
	 */
	public function __construct ($target, $func) {
		#/usr/share/haxe/std/php7/Boot.hx:806: characters 2-22
		$this->target = $target;
		#/usr/share/haxe/std/php7/Boot.hx:807: characters 2-18
		$this->func = $func;
		#/usr/share/haxe/std/php7/Boot.hx:809: lines 809-811
		if (is_null($target)) {
			#/usr/share/haxe/std/php7/Boot.hx:810: characters 3-8
			throw new HxException("Unable to create closure on `null`");
		}
	}


	/**
	 * @return mixed
	 */
	public function __invoke () {
		#/usr/share/haxe/std/php7/Boot.hx:819: characters 2-75
		return call_user_func_array($this->getCallback(), func_get_args());
	}


	/**
	 * @param mixed $newThis
	 * @param mixed $args
	 * 
	 * @return mixed
	 */
	public function callWith ($newThis, $args) {
		#/usr/share/haxe/std/php7/Boot.hx:848: characters 2-64
		return call_user_func_array($this->getCallback($newThis), $args);
	}


	/**
	 * @param HxClosure $closure
	 * 
	 * @return bool
	 */
	public function equals ($closure) {
		#/usr/share/haxe/std/php7/Boot.hx:841: characters 9-59
		if (Boot::equal($this->target, $closure->target)) {
			#/usr/share/haxe/std/php7/Boot.hx:841: characters 38-58
			return $this->func === $closure->func;
		} else {
			#/usr/share/haxe/std/php7/Boot.hx:841: characters 9-59
			return false;
		}
	}


	/**
	 * @param mixed $eThis
	 * 
	 * @return mixed
	 */
	public function getCallback ($eThis = null) {
		#/usr/share/haxe/std/php7/Boot.hx:826: lines 826-828
		if ($eThis === null) {
			#/usr/share/haxe/std/php7/Boot.hx:827: characters 3-17
			$eThis = $this->target;
		}
		#/usr/share/haxe/std/php7/Boot.hx:829: lines 829-833
		if (($eThis instanceof \StdClass)) {
			#/usr/share/haxe/std/php7/Boot.hx:830: lines 830-832
			if (($eThis instanceof HxAnon)) {
				#/usr/share/haxe/std/php7/Boot.hx:831: characters 27-32
				$tmp = $eThis;
				#/usr/share/haxe/std/php7/Boot.hx:831: characters 34-38
				$tmp1 = $this->func;
				#/usr/share/haxe/std/php7/Boot.hx:831: characters 4-39
				return $tmp->{$tmp1};
			}
		}
		#/usr/share/haxe/std/php7/Boot.hx:834: characters 2-38
		return [$eThis, $this->func];
	}
}


Boot::registerClass(HxClosure::class, 'php._Boot.HxClosure');