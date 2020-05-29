<?php
/**
 * Generated by Haxe 4.0.0
 */

use \php\Boot;
use \php\_Boot\HxString;

class Std {
	/**
	 * @param mixed $value
	 * @param Class $c
	 * 
	 * @return mixed
	 */
	static public function instance ($value, $c) {
		#/usr/share/haxe/std/php7/_std/Std.hx:37: characters 9-51
		if (Boot::is($value, $c)) {
			#/usr/share/haxe/std/php7/_std/Std.hx:37: characters 34-44
			return $value;
		} else {
			#/usr/share/haxe/std/php7/_std/Std.hx:37: characters 47-51
			return null;
		}
	}


	/**
	 * @param float $x
	 * 
	 * @return int
	 */
	static public function int ($x) {
		#/usr/share/haxe/std/php7/_std/Std.hx:45: characters 2-22
		return (int)$x;
	}


	/**
	 * @param mixed $v
	 * @param mixed $t
	 * 
	 * @return bool
	 */
	static public function is ($v, $t) {
		#/usr/share/haxe/std/php7/_std/Std.hx:33: characters 2-22
		return Boot::is($v, $t);
	}


	/**
	 * @param int $charCode
	 * 
	 * @return bool
	 */
	static public function isDigitCode ($charCode) {
		#/usr/share/haxe/std/php7/_std/Std.hx:91: characters 9-73
		if (($charCode !== null) && ($charCode >= 48)) {
			#/usr/share/haxe/std/php7/_std/Std.hx:91: characters 53-73
			return $charCode <= 57;
		} else {
			#/usr/share/haxe/std/php7/_std/Std.hx:91: characters 9-73
			return false;
		}
	}


	/**
	 * @param string $x
	 * 
	 * @return float
	 */
	static public function parseFloat ($x) {
		#/usr/share/haxe/std/php7/_std/Std.hx:68: characters 2-34
		$result = floatval($x);
		#/usr/share/haxe/std/php7/_std/Std.hx:69: characters 2-32
		if (!Boot::equal($result, 0)) {
			#/usr/share/haxe/std/php7/_std/Std.hx:69: characters 19-32
			return $result;
		}
		#/usr/share/haxe/std/php7/_std/Std.hx:71: characters 2-21
		$x = ltrim($x);
		#/usr/share/haxe/std/php7/_std/Std.hx:72: characters 2-52
		$firstCharIndex = (HxString::charAt($x, 0) === "-" ? 1 : 0);
		#/usr/share/haxe/std/php7/_std/Std.hx:73: characters 2-46
		$charCode = HxString::charCodeAt($x, $firstCharIndex);
		#/usr/share/haxe/std/php7/_std/Std.hx:75: lines 75-77
		if ($charCode === 46) {
			#/usr/share/haxe/std/php7/_std/Std.hx:76: characters 3-46
			$charCode = HxString::charCodeAt($x, $firstCharIndex + 1);
		}
		#/usr/share/haxe/std/php7/_std/Std.hx:79: lines 79-83
		if (($charCode !== null) && ($charCode >= 48) && ($charCode <= 57)) {
			#/usr/share/haxe/std/php7/_std/Std.hx:80: characters 3-13
			return 0.0;
		} else {
			#/usr/share/haxe/std/php7/_std/Std.hx:82: characters 3-19
			return NAN;
		}
	}


	/**
	 * @param string $x
	 * 
	 * @return int
	 */
	static public function parseInt ($x) {
		#/usr/share/haxe/std/php7/_std/Std.hx:49: lines 49-64
		if (is_numeric($x)) {
			#/usr/share/haxe/std/php7/_std/Std.hx:50: characters 3-30
			return intval($x, 10);
		} else {
			#/usr/share/haxe/std/php7/_std/Std.hx:52: characters 3-22
			$x = ltrim($x);
			#/usr/share/haxe/std/php7/_std/Std.hx:53: characters 3-53
			$firstCharIndex = (HxString::charAt($x, 0) === "-" ? 1 : 0);
			#/usr/share/haxe/std/php7/_std/Std.hx:54: characters 3-52
			$firstCharCode = HxString::charCodeAt($x, $firstCharIndex);
			#/usr/share/haxe/std/php7/_std/Std.hx:55: lines 55-57
			if (!(($firstCharCode !== null) && ($firstCharCode >= 48) && ($firstCharCode <= 57))) {
				#/usr/share/haxe/std/php7/_std/Std.hx:56: characters 4-15
				return null;
			}
			#/usr/share/haxe/std/php7/_std/Std.hx:58: characters 3-49
			$secondChar = HxString::charAt($x, $firstCharIndex + 1);
			#/usr/share/haxe/std/php7/_std/Std.hx:59: lines 59-63
			if (($secondChar === "x") || ($secondChar === "X")) {
				#/usr/share/haxe/std/php7/_std/Std.hx:60: characters 4-30
				return intval($x, 0);
			} else {
				#/usr/share/haxe/std/php7/_std/Std.hx:62: characters 4-31
				return intval($x, 10);
			}
		}
	}


	/**
	 * @param int $x
	 * 
	 * @return int
	 */
	static public function random ($x) {
		#/usr/share/haxe/std/php7/_std/Std.hx:87: characters 9-46
		if ($x <= 1) {
			#/usr/share/haxe/std/php7/_std/Std.hx:87: characters 18-19
			return 0;
		} else {
			#/usr/share/haxe/std/php7/_std/Std.hx:87: characters 22-46
			return mt_rand(0, $x - 1);
		}
	}


	/**
	 * @param mixed $s
	 * 
	 * @return string
	 */
	static public function string ($s) {
		#/usr/share/haxe/std/php7/_std/Std.hx:41: characters 2-26
		return Boot::stringify($s);
	}
}


Boot::registerClass(Std::class, 'Std');
