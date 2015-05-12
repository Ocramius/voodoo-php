<?php

$foo = (object) ["\0Foo\0bar" => 'baz'];

var_dump(Closure::bind(function () { return $this->baz; }, $foo, 'Foo')->__invoke());
