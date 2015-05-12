<?php

require_once __DIR__ . '/../vendor/autoload.php';

class Foo
{
    private $bar = '0';

    private function saySomething($baz)
    {
        return $this->bar . $baz;
    }
}

$altrEgo = \AltrEgo\AltrEgo::create(new Foo());

$altrEgo->bar = '11';

var_dump($altrEgo->saySomething('22'));
