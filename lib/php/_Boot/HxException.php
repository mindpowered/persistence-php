<?php
/**
 * Generated by Haxe 4.0.0
 */

namespace php\_Boot;

use \php\Boot;

class HxException extends \Exception {
	/**
	 * @var mixed
	 */
	public $e;


	/**
	 * @param mixed $e
	 * 
	 * @return void
	 */
	public function __construct ($e) {
		#/usr/share/haxe/std/php7/Boot.hx:860: characters 3-13
		$this->e = $e;
		#/usr/share/haxe/std/php7/Boot.hx:861: characters 3-27
		parent::__construct(Boot::stringify($e));
	}
}


Boot::registerClass(HxException::class, 'php._Boot.HxException');