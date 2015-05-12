<?php

namespace VoodooPhpExamples;

class Buzzer
{
    public function buzz($tone = null)
    {
        return ($tone ?: 'BUZZZZZZZ') . PHP_EOL;
    }
}
