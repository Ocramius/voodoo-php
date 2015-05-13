<?php

require_once __DIR__ . '/../vendor/autoload.php';

class Foo {
    private $bar = 'baz';

    public function sayBar()
    {
        echo $this->bar;
    }
}

$factory = new \ProxyManager\Factory\LazyLoadingGhostFactory();

$proxy = $factory->createProxy(
    'Foo',
    function ($p, $m, $args, & $initializer, $properties) {
        $initializer              = null;
        $properties["\0Foo\0bar"] = 'HAHA!';
    }
);

$proxy->sayBar();
