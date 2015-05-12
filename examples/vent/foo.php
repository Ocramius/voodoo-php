<?php

require_once __DIR__ . '/../vendor/autoload.php';

class Foo
{
    use Vent\VentTrait;

    private $bar;

    public function __construct()
    {
        $this->registerEvent('read', 'bar', function() {
            echo 'Reading "bar"' . PHP_EOL;
        });
    }

    public function doSomething()
    {
        $this->bar;
    }
}

$foo = new Foo();

$foo->doSomething();
