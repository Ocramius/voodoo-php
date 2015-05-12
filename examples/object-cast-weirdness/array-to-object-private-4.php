<?php

$foo = (object) ["\0Foo\0bar" => 'baz'];

$rp = new ReflectionProperty('Foo', 'bar');

$rp->setAccessible(true);

var_dump($rp->getValue($foo));
