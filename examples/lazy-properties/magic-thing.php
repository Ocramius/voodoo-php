<?php

class MagicThing
{
    public $something = 'foo';

    public function saySomething()
    {
        return $this->something;
    }

    public function __get($name)
    {
        throw new DomainException('Stop touching my things!');
    }
}

$thing = new MagicThing();

var_dump($thing->saySomething());

unset($thing->something);

var_dump($thing->saySomething()); // ???
