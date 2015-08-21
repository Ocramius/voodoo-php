<?php

namespace VoodooPhpExamples\Strict;

class ClassWithIntProperty
{
    /**
     * @var int
     */
    private $anInteger;

    public function __construct() {
        /* wrong, as it doesn't initialize the property */
    }
}
