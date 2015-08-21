<?php

namespace VoodooPhpExamples\Strict;

/**
 * CHOO CHOO!
 */
class Train
{
    /**
     * @var Wagon[]
     */
    private $wagons;

    /**
     * @param Wagon[] $wagons
     */
    public function __construct(array $wagons)
    {
        $this->wagons = $wagons;
    }
}
