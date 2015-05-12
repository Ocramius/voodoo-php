<?php

require_once __DIR__ . '/../vendor/autoload.php';

$map = new \LazyMap\CallbackLazyMap(function ($name) {
    return new \ReflectionClass($name);
});

var_dump($map->ArrayObject);
var_dump($map->ArrayIterator);
