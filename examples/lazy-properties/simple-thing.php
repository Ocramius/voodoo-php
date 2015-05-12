<?php

class Thing
{
    public $something = 'foo';

    public function saySomething()
    {
        return $this->something;
    }
}

$thing = new Thing();

var_dump($thing->saySomething());

unset($thing->something);

var_dump($thing->saySomething()); // ???
