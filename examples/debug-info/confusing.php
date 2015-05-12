<?php

class Foo
{
    private $thisWillGoWrongSomewhere = 'OHAI!';

    public function __debugInfo() {
        // let me confuse you a bit
        return [];
    }
}

var_dump(new Foo());
