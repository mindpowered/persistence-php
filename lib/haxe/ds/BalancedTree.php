<?php
/**
 * Generated by Haxe 4.0.0
 */

namespace haxe\ds;

use \php\Boot;
use \php\_Boot\HxException;
use \haxe\CallStack;

class BalancedTree {
	/**
	 * @var TreeNode
	 */
	public $root;


	/**
	 * @return void
	 */
	public function __construct () {
	}


	/**
	 * @param TreeNode $l
	 * @param mixed $k
	 * @param mixed $v
	 * @param TreeNode $r
	 * 
	 * @return TreeNode
	 */
	public function balance ($l, $k, $v, $r) {
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:188: characters 2-26
		$hl = ($l === null ? 0 : $l->_height);
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:189: characters 2-26
		$hr = ($r === null ? 0 : $r->_height);
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:190: lines 190-198
		if ($hl > ($hr + 2)) {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:191: characters 7-26
			$_this = $l->left;
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:191: characters 30-50
			$_this1 = $l->right;
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:191: lines 191-192
			if ((($_this === null ? 0 : $_this->_height)) >= (($_this1 === null ? 0 : $_this1->_height))) {
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:191: characters 70-76
				$l1 = $l->left;
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:191: characters 78-83
				$l2 = $l->key;
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:191: characters 85-92
				$l3 = $l->value;
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:191: characters 52-130
				return new TreeNode($l1, $l2, $l3, new TreeNode($l->right, $k, $v, $r));
			} else {
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:192: characters 26-80
				$tmp = new TreeNode($l->left, $l->key, $l->value, $l->right->left);
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:192: characters 82-93
				$l4 = $l->right->key;
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:192: characters 95-108
				$l5 = $l->right->value;
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:192: characters 8-152
				return new TreeNode($tmp, $l4, $l5, new TreeNode($l->right->right, $k, $v, $r));
			}
		} else if ($hr > ($hl + 2)) {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:194: characters 7-27
			$_this2 = $r->right;
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:194: characters 30-49
			$_this3 = $r->left;
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:194: lines 194-195
			if ((($_this2 === null ? 0 : $_this2->_height)) > (($_this3 === null ? 0 : $_this3->_height))) {
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:194: characters 51-129
				return new TreeNode(new TreeNode($l, $k, $v, $r->left), $r->key, $r->value, $r->right);
			} else {
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:195: characters 26-65
				$tmp1 = new TreeNode($l, $k, $v, $r->left->left);
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:195: characters 67-77
				$r1 = $r->left->key;
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:195: characters 79-91
				$r2 = $r->left->value;
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:195: characters 8-150
				return new TreeNode($tmp1, $r1, $r2, new TreeNode($r->left->right, $r->key, $r->value, $r->right));
			}
		} else {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:197: characters 3-57
			return new TreeNode($l, $k, $v, $r, (($hl > $hr ? $hl : $hr)) + 1);
		}
	}


	/**
	 * @param mixed $k1
	 * @param mixed $k2
	 * 
	 * @return int
	 */
	public function compare ($k1, $k2) {
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:202: characters 2-32
		return \Reflect::compare($k1, $k2);
	}


	/**
	 * @param mixed $key
	 * 
	 * @return bool
	 */
	public function exists ($key) {
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:100: characters 2-18
		$node = $this->root;
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:101: lines 101-106
		while ($node !== null) {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:102: characters 3-34
			$c = $this->compare($key, $node->key);
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:103: lines 103-105
			if ($c === 0) {
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:103: characters 15-26
				return true;
			} else if ($c < 0) {
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:104: characters 19-35
				$node = $node->left;
			} else {
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:105: characters 8-25
				$node = $node->right;
			}
		}
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:107: characters 2-14
		return false;
	}


	/**
	 * @param mixed $key
	 * 
	 * @return mixed
	 */
	public function get ($key) {
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:62: characters 2-18
		$node = $this->root;
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:63: lines 63-68
		while ($node !== null) {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:64: characters 3-34
			$c = $this->compare($key, $node->key);
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:65: characters 3-32
			if ($c === 0) {
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:65: characters 15-32
				return $node->value;
			}
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:66: lines 66-67
			if ($c < 0) {
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:66: characters 14-30
				$node = $node->left;
			} else {
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:67: characters 8-25
				$node = $node->right;
			}
		}
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:69: characters 2-13
		return null;
	}


	/**
	 * @return object
	 */
	public function iterator () {
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:116: characters 2-15
		$ret = new \Array_hx();
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:117: characters 2-25
		$this->iteratorLoop($this->root, $ret);
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:118: characters 2-23
		return $ret->iterator();
	}


	/**
	 * @param TreeNode $node
	 * @param \Array_hx $acc
	 * 
	 * @return void
	 */
	public function iteratorLoop ($node, $acc) {
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:154: lines 154-158
		if ($node !== null) {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:155: characters 3-31
			$this->iteratorLoop($node->left, $acc);
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:156: characters 3-23
			$acc->arr[$acc->length] = $node->value;
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:156: characters 3-23
			++$acc->length;

			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:157: characters 3-32
			$this->iteratorLoop($node->right, $acc);
		}
	}


	/**
	 * @return object
	 */
	public function keys () {
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:127: characters 2-15
		$ret = new \Array_hx();
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:128: characters 2-21
		$this->keysLoop($this->root, $ret);
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:129: characters 2-23
		return $ret->iterator();
	}


	/**
	 * @param TreeNode $node
	 * @param \Array_hx $acc
	 * 
	 * @return void
	 */
	public function keysLoop ($node, $acc) {
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:162: lines 162-166
		if ($node !== null) {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:163: characters 3-27
			$this->keysLoop($node->left, $acc);
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:164: characters 3-21
			$acc->arr[$acc->length] = $node->key;
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:164: characters 3-21
			++$acc->length;

			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:165: characters 3-28
			$this->keysLoop($node->right, $acc);
		}
	}


	/**
	 * @param TreeNode $t1
	 * @param TreeNode $t2
	 * 
	 * @return TreeNode
	 */
	public function merge ($t1, $t2) {
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:170: characters 2-27
		if ($t1 === null) {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:170: characters 18-27
			return $t2;
		}
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:171: characters 2-27
		if ($t2 === null) {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:171: characters 18-27
			return $t1;
		}
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:172: characters 2-25
		$t = $this->minBinding($t2);
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:173: characters 2-58
		return $this->balance($t1, $t->key, $t->value, $this->removeMinBinding($t2));
	}


	/**
	 * @param TreeNode $t
	 * 
	 * @return TreeNode
	 */
	public function minBinding ($t) {
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:177: lines 177-179
		if ($t === null) {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:177: characters 24-29
			throw new HxException("Not_found");
		} else if ($t->left === null) {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:178: characters 27-28
			return $t;
		} else {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:179: characters 7-25
			return $this->minBinding($t->left);
		}
	}


	/**
	 * @param mixed $key
	 * 
	 * @return bool
	 */
	public function remove ($key) {
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:83: lines 83-89
		try {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:84: characters 3-31
			$this->root = $this->removeLoop($key, $this->root);
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:85: characters 3-14
			return true;
		} catch (\Throwable $__hx__caught_e) {
			CallStack::saveExceptionTrace($__hx__caught_e);
			$__hx__real_e = ($__hx__caught_e instanceof HxException ? $__hx__caught_e->e : $__hx__caught_e);
			if (is_string($__hx__real_e)) {
				$e = $__hx__real_e;
				#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:88: characters 3-15
				return false;
			} else  throw $__hx__caught_e;
		}
	}


	/**
	 * @param mixed $k
	 * @param TreeNode $node
	 * 
	 * @return TreeNode
	 */
	public function removeLoop ($k, $node) {
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:146: characters 2-25
		if ($node === null) {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:146: characters 20-25
			throw new HxException("Not_found");
		}
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:147: characters 2-31
		$c = $this->compare($k, $node->key);
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:148: lines 148-150
		if ($c === 0) {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:148: characters 21-49
			return $this->merge($node->left, $node->right);
		} else if ($c < 0) {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:149: characters 18-85
			return $this->balance($this->removeLoop($k, $node->left), $node->key, $node->value, $node->right);
		} else {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:150: characters 7-74
			return $this->balance($node->left, $node->key, $node->value, $this->removeLoop($k, $node->right));
		}
	}


	/**
	 * @param TreeNode $t
	 * 
	 * @return TreeNode
	 */
	public function removeMinBinding ($t) {
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:183: lines 183-184
		if ($t->left === null) {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:183: characters 29-36
			return $t->right;
		} else {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:184: characters 7-65
			return $this->balance($this->removeMinBinding($t->left), $t->key, $t->value, $t->right);
		}
	}


	/**
	 * @param mixed $key
	 * @param mixed $value
	 * 
	 * @return void
	 */
	public function set ($key, $value) {
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:51: characters 2-34
		$this->root = $this->setLoop($key, $value, $this->root);
	}


	/**
	 * @param mixed $k
	 * @param mixed $v
	 * @param TreeNode $node
	 * 
	 * @return TreeNode
	 */
	public function setLoop ($k, $v, $node) {
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:133: characters 2-62
		if ($node === null) {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:133: characters 20-62
			return new TreeNode(null, $k, $v, null);
		}
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:134: characters 2-31
		$c = $this->compare($k, $node->key);
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:135: lines 135-142
		if ($c === 0) {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:135: characters 21-86
			return new TreeNode($node->left, $k, $v, $node->right, ($node === null ? 0 : $node->_height));
		} else if ($c < 0) {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:137: characters 3-37
			$nl = $this->setLoop($k, $v, $node->left);
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:138: characters 3-48
			return $this->balance($nl, $node->key, $node->value, $node->right);
		} else {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:140: characters 3-38
			$nr = $this->setLoop($k, $v, $node->right);
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:141: characters 3-47
			return $this->balance($node->left, $node->key, $node->value, $nr);
		}
	}


	/**
	 * @return string
	 */
	public function toString () {
		#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:206: characters 9-53
		if ($this->root === null) {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:206: characters 25-27
			return "{}";
		} else {
			#/usr/share/haxe/std/haxe/ds/BalancedTree.hx:206: characters 32-52
			return "{" . ($this->root->toString()??'null') . "}";
		}
	}


	public function __toString() {
		return $this->toString();
	}
}


Boot::registerClass(BalancedTree::class, 'haxe.ds.BalancedTree');
