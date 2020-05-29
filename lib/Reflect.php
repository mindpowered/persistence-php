<?php
/**
 * Generated by Haxe 4.0.0
 */

use \php\_Boot\HxClosure;
use \php\Boot;
use \php\_Boot\HxClass;
use \php\_Boot\HxEnum;
use \php\_Boot\HxAnon;

class Reflect {
	/**
	 * @param mixed $o
	 * @param mixed $func
	 * @param \Array_hx $args
	 * 
	 * @return mixed
	 */
	static public function callMethod ($o, $func, $args) {
		#/usr/share/haxe/std/php7/_std/Reflect.hx:97: lines 97-104
		if (($func instanceof \Closure)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:98: lines 98-100
			if ($o !== null) {
				#/usr/share/haxe/std/php7/_std/Reflect.hx:99: characters 4-45
				$func = (Boot::typedCast(Boot::getClass(\Closure::class), $func))->bindTo($o);
			}
			#/usr/share/haxe/std/php7/_std/Reflect.hx:101: characters 3-69
			return call_user_func_array($func, $args->arr);
		} else {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:103: characters 3-70
			return $func->callWith($o, $args->arr);
		}
	}


	/**
	 * @param mixed $a
	 * @param mixed $b
	 * 
	 * @return int
	 */
	static public function compare ($a, $b) {
		#/usr/share/haxe/std/php7/_std/Reflect.hx:119: characters 2-22
		if (Boot::equal($a, $b)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:119: characters 14-22
			return 0;
		}
		#/usr/share/haxe/std/php7/_std/Reflect.hx:120: lines 120-124
		if (is_string($a)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:121: characters 3-39
			return strcmp($a, $b);
		} else if ($a > $b) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:123: characters 33-34
			return 1;
		} else {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:123: characters 37-39
			return -1;
		}
	}


	/**
	 * @param mixed $f1
	 * @param mixed $f2
	 * 
	 * @return bool
	 */
	static public function compareMethods ($f1, $f2) {
		#/usr/share/haxe/std/php7/_std/Reflect.hx:128: lines 128-132
		if (($f1 instanceof HxClosure) && ($f2 instanceof HxClosure)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:129: characters 3-23
			return $f1->equals($f2);
		} else {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:131: characters 3-18
			return Boot::equal($f1, $f2);
		}
	}


	/**
	 * @param mixed $o
	 * 
	 * @return mixed
	 */
	static public function copy ($o) {
		#/usr/share/haxe/std/php7/_std/Reflect.hx:157: lines 157-163
		if (is_object($o)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:158: characters 3-47
			$fields = get_object_vars($o);
			#/usr/share/haxe/std/php7/_std/Reflect.hx:159: characters 3-46
			$hxAnon = Boot::getClass(HxAnon::class)->phpClassName;
			#/usr/share/haxe/std/php7/_std/Reflect.hx:160: characters 27-33
			$tmp = $hxAnon;
			#/usr/share/haxe/std/php7/_std/Reflect.hx:160: characters 3-42
			return new $tmp($fields);
		} else {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:162: characters 3-14
			return null;
		}
	}


	/**
	 * @param mixed $o
	 * @param string $field
	 * 
	 * @return bool
	 */
	static public function deleteField ($o, $field) {
		#/usr/share/haxe/std/php7/_std/Reflect.hx:148: lines 148-153
		if (Reflect::hasField($o, $field)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:149: characters 32-33
			$tmp = $o;
			#/usr/share/haxe/std/php7/_std/Reflect.hx:149: characters 35-40
			$tmp1 = $field;
			#/usr/share/haxe/std/php7/_std/Reflect.hx:149: characters 3-42
			unset($tmp->{$tmp1});
			#/usr/share/haxe/std/php7/_std/Reflect.hx:150: characters 3-14
			return true;
		} else {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:152: characters 3-15
			return false;
		}
	}


	/**
	 * @param mixed $o
	 * @param string $field
	 * 
	 * @return mixed
	 */
	static public function field ($o, $field) {
		#/usr/share/haxe/std/php7/_std/Reflect.hx:45: characters 2-33
		if (!is_object($o)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:45: characters 22-33
			return null;
		}
		#/usr/share/haxe/std/php7/_std/Reflect.hx:47: lines 47-49
		if (property_exists($o, $field)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:48: characters 26-27
			$tmp = $o;
			#/usr/share/haxe/std/php7/_std/Reflect.hx:48: characters 29-34
			$tmp1 = $field;
			#/usr/share/haxe/std/php7/_std/Reflect.hx:48: characters 3-35
			return $tmp->{$tmp1};
		}
		#/usr/share/haxe/std/php7/_std/Reflect.hx:50: lines 50-52
		if (method_exists($o, $field)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:51: characters 3-32
			return new HxClosure($o, $field);
		}
		#/usr/share/haxe/std/php7/_std/Reflect.hx:54: lines 54-61
		if (($o instanceof HxClass)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:55: lines 55-57
			if (property_exists(Boot::dynamicField($o, 'phpClassName'), $field)) {
				#/usr/share/haxe/std/php7/_std/Reflect.hx:56: characters 27-28
				$tmp2 = $o;
				#/usr/share/haxe/std/php7/_std/Reflect.hx:56: characters 30-35
				$tmp3 = $field;
				#/usr/share/haxe/std/php7/_std/Reflect.hx:56: characters 4-36
				return $tmp2->{$tmp3};
			}
			#/usr/share/haxe/std/php7/_std/Reflect.hx:58: lines 58-60
			if (method_exists(Boot::dynamicField($o, 'phpClassName'), $field)) {
				#/usr/share/haxe/std/php7/_std/Reflect.hx:59: characters 11-46
				return new HxClosure(Boot::dynamicField($o, 'phpClassName'), $field);
			}
		}
		#/usr/share/haxe/std/php7/_std/Reflect.hx:63: characters 2-13
		return null;
	}


	/**
	 * @param mixed $o
	 * 
	 * @return \Array_hx
	 */
	static public function fields ($o) {
		#/usr/share/haxe/std/php7/_std/Reflect.hx:108: lines 108-110
		if (is_object($o)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:109: characters 3-76
			return \Array_hx::wrap(array_keys(get_object_vars($o)));
		}
		#/usr/share/haxe/std/php7/_std/Reflect.hx:111: characters 2-11
		return new \Array_hx();
	}


	/**
	 * @param mixed $o
	 * @param string $field
	 * 
	 * @return mixed
	 */
	static public function getProperty ($o, $field) {
		#/usr/share/haxe/std/php7/_std/Reflect.hx:71: lines 71-79
		if (is_object($o)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:72: lines 72-78
			if (Boot::hasGetter(get_class($o), $field)) {
				#/usr/share/haxe/std/php7/_std/Reflect.hx:73: characters 23-24
				$tmp = $o;
				#/usr/share/haxe/std/php7/_std/Reflect.hx:73: characters 27-37
				$tmp1 = "get_" . ($field??'null');
				#/usr/share/haxe/std/php7/_std/Reflect.hx:73: characters 4-39
				return $tmp->{$tmp1}();
			} else if (method_exists($o, $field)) {
				#/usr/share/haxe/std/php7/_std/Reflect.hx:75: characters 4-33
				return new HxClosure($o, $field);
			} else {
				#/usr/share/haxe/std/php7/_std/Reflect.hx:77: characters 27-28
				$tmp2 = $o;
				#/usr/share/haxe/std/php7/_std/Reflect.hx:77: characters 30-35
				$tmp3 = $field;
				#/usr/share/haxe/std/php7/_std/Reflect.hx:77: characters 4-36
				return $tmp2->{$tmp3};
			}
		}
		#/usr/share/haxe/std/php7/_std/Reflect.hx:80: lines 80-82
		if (is_string($o) && ($field === "length")) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:81: characters 3-26
			return strlen($o);
		}
		#/usr/share/haxe/std/php7/_std/Reflect.hx:83: characters 2-13
		return null;
	}


	/**
	 * @param mixed $o
	 * @param string $field
	 * 
	 * @return bool
	 */
	static public function hasField ($o, $field) {
		#/usr/share/haxe/std/php7/_std/Reflect.hx:33: characters 2-34
		if (!is_object($o)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:33: characters 22-34
			return false;
		}
		#/usr/share/haxe/std/php7/_std/Reflect.hx:34: characters 2-43
		if (property_exists($o, $field)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:34: characters 32-43
			return true;
		}
		#/usr/share/haxe/std/php7/_std/Reflect.hx:36: lines 36-39
		if (($o instanceof HxClass)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:37: characters 3-65
			if (property_exists(Boot::dynamicField($o, 'phpClassName'), $field)) {
				#/usr/share/haxe/std/php7/_std/Reflect.hx:37: characters 54-65
				return true;
			}
			#/usr/share/haxe/std/php7/_std/Reflect.hx:38: characters 3-53
			return method_exists(Boot::dynamicField($o, 'phpClassName'), $field);
		}
		#/usr/share/haxe/std/php7/_std/Reflect.hx:41: characters 2-14
		return false;
	}


	/**
	 * @param mixed $v
	 * 
	 * @return bool
	 */
	static public function isEnumValue ($v) {
		#/usr/share/haxe/std/php7/_std/Reflect.hx:144: characters 2-28
		return ($v instanceof HxEnum);
	}


	/**
	 * @param mixed $f
	 * 
	 * @return bool
	 */
	static public function isFunction ($f) {
		#/usr/share/haxe/std/php7/_std/Reflect.hx:115: characters 9-27
		if (!($f instanceof \Closure)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:115: characters 9-27
			return ($f instanceof HxClosure);
		} else {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:115: characters 9-27
			return true;
		}
	}


	/**
	 * @param mixed $v
	 * 
	 * @return bool
	 */
	static public function isObject ($v) {
		#/usr/share/haxe/std/php7/_std/Reflect.hx:136: lines 136-140
		if (($v instanceof HxEnum)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:137: characters 3-15
			return false;
		} else if (!is_object($v)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:139: characters 27-40
			return is_string($v);
		} else {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:139: characters 10-40
			return true;
		}
	}


	/**
	 * @param \Closure $f
	 * 
	 * @return mixed
	 */
	static public function makeVarArgs ($f) {
		#/usr/share/haxe/std/php7/_std/Reflect.hx:168: lines 168-170
		return function ()  use (&$f) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:169: characters 51-85
			$tmp = \Array_hx::wrap(func_get_args());
			#/usr/share/haxe/std/php7/_std/Reflect.hx:169: characters 3-86
			return call_user_func($f, $tmp);
		};
	}


	/**
	 * @param mixed $o
	 * @param string $field
	 * @param mixed $value
	 * 
	 * @return void
	 */
	static public function setField ($o, $field, $value) {
		#/usr/share/haxe/std/php7/_std/Reflect.hx:67: characters 18-19
		$tmp = $o;
		#/usr/share/haxe/std/php7/_std/Reflect.hx:67: characters 21-26
		$tmp1 = $field;
		#/usr/share/haxe/std/php7/_std/Reflect.hx:67: characters 2-34
		$tmp->{$tmp1} = $value;
	}


	/**
	 * @param mixed $o
	 * @param string $field
	 * @param mixed $value
	 * 
	 * @return void
	 */
	static public function setProperty ($o, $field, $value) {
		#/usr/share/haxe/std/php7/_std/Reflect.hx:87: lines 87-93
		if (is_object($o)) {
			#/usr/share/haxe/std/php7/_std/Reflect.hx:88: lines 88-92
			if (Boot::hasSetter(get_class($o), $field)) {
				#/usr/share/haxe/std/php7/_std/Reflect.hx:89: characters 16-17
				$tmp = $o;
				#/usr/share/haxe/std/php7/_std/Reflect.hx:89: characters 20-30
				$tmp1 = "set_" . ($field??'null');
				#/usr/share/haxe/std/php7/_std/Reflect.hx:89: characters 4-39
				$tmp->{$tmp1}($value);
			} else {
				#/usr/share/haxe/std/php7/_std/Reflect.hx:91: characters 20-21
				$tmp2 = $o;
				#/usr/share/haxe/std/php7/_std/Reflect.hx:91: characters 23-28
				$tmp3 = $field;
				#/usr/share/haxe/std/php7/_std/Reflect.hx:91: characters 4-36
				$tmp2->{$tmp3} = $value;
			}
		}
	}
}


Boot::registerClass(Reflect::class, 'Reflect');