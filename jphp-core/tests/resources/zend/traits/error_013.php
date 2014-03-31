--TEST--
Trying to use static as method modifier
--FILE--
<?php

trait foo {
	public function test() { return 3; }
}

class bar {
	use foo { test as static; }
}

$x = new bar;
var_dump($x->test());

?>
--EXPECTF--

Parse error: Syntax error, unexpected 'static' in %s on line %d, position %d