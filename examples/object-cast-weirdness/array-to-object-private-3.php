<?php

$foo = (object) ["\0Foo\0bar" => 'baz'];

var_dump($foo->bar);
