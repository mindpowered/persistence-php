<?php
/**
 * Generated by Haxe 4.0.0
 */

namespace php\_Boot;

use \php\Boot;

class HxClass {
	/**
	 * @var string
	 */
	public $phpClassName;


	/**
	 * @param string $phpClassName
	 * 
	 * @return void
	 */
	public function __construct ($phpClassName) {
		#/usr/share/haxe/std/php7/Boot.hx:525: characters 2-34
		$this->phpClassName = $phpClassName;
	}


	/**
	 * @param string $method
	 * @param mixed $args
	 * 
	 * @return mixed
	 */
	public function __call ($method, $args) {
		#/usr/share/haxe/std/php7/Boot.hx:533: characters 2-46
		$callback = ($this->phpClassName??'null') . "::" . ($method??'null');
		#/usr/share/haxe/std/php7/Boot.hx:534: characters 2-52
		return call_user_func_array($callback, $args);
	}


	/**
	 * @param string $property
	 * 
	 * @return mixed
	 */
	public function __get ($property) {
		#/usr/share/haxe/std/php7/Boot.hx:542: lines 542-546
		if (Boot::hasGetter($this->phpClassName, $property)) {
			#/usr/share/haxe/std/php7/Boot.hx:543: characters 28-40
			$tmp = $this->phpClassName;
			#/usr/share/haxe/std/php7/Boot.hx:543: characters 43-56
			$tmp1 = "get_" . ($property??'null');
			#/usr/share/haxe/std/php7/Boot.hx:543: characters 3-58
			return $tmp::{$tmp1}();
		} else {
			#/usr/share/haxe/std/php7/Boot.hx:545: characters 32-44
			$tmp2 = $this->phpClassName;
			#/usr/share/haxe/std/php7/Boot.hx:545: characters 46-54
			$tmp3 = $property;
			#/usr/share/haxe/std/php7/Boot.hx:545: characters 3-55
			return $tmp2::${$tmp3};
		}
	}


	/**
	 * @param string $property
	 * @param mixed $value
	 * 
	 * @return void
	 */
	public function __set ($property, $value) {
		#/usr/share/haxe/std/php7/Boot.hx:554: lines 554-558
		if (Boot::hasSetter($this->phpClassName, $property)) {
			#/usr/share/haxe/std/php7/Boot.hx:555: characters 21-33
			$tmp = $this->phpClassName;
			#/usr/share/haxe/std/php7/Boot.hx:555: characters 36-49
			$tmp1 = "set_" . ($property??'null');
			#/usr/share/haxe/std/php7/Boot.hx:555: characters 3-58
			$tmp::{$tmp1}($value);
		} else {
			#/usr/share/haxe/std/php7/Boot.hx:557: characters 25-37
			$tmp2 = $this->phpClassName;
			#/usr/share/haxe/std/php7/Boot.hx:557: characters 39-47
			$tmp3 = $property;
			#/usr/share/haxe/std/php7/Boot.hx:557: characters 3-55
			$tmp2::${$tmp3} = $value;
		}
	}
}


Boot::registerClass(HxClass::class, 'php._Boot.HxClass');