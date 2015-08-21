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
     * @var Passenger[][]
     */
    private $passengers = [];

    /**
     * @param Wagon[] $wagons
     */
    public function __construct(array $wagons)
    {
        $this->wagons = $wagons;
    }

    /**
     * @param Passenger[][] $passengersPerSeatPerWagon
     *
     * @return void
     */
    public function boardPassengers(array $passengersPerSeatPerWagon)
    {
        $this->passengers = $passengersPerSeatPerWagon;
    }
}
