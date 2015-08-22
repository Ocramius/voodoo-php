<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/init-strict.php';

$train = new \VoodooPhpExamples\Strict\Railway\Train(
    [
        new \VoodooPhpExamples\Strict\Railway\Wagon(),
        new \VoodooPhpExamples\Strict\Railway\Wagon(),
        new \stdClass(),
    ]
);

$train->boardPassengers([
    [
        new \VoodooPhpExamples\Strict\Railway\Passenger('Maximilian', 'Berghoff'),
        new \VoodooPhpExamples\Strict\Railway\Passenger('Andreas', 'Heigl'),
    ],
    [
        new \VoodooPhpExamples\Strict\Railway\Passenger('Benjamin', 'Eberlei'),
        new \VoodooPhpExamples\Strict\Railway\Passenger('Kore', 'Nordmann'),
    ],
    [
        new \VoodooPhpExamples\Strict\Railway\Passenger('Marco', 'Pivetta'),
        new \VoodooPhpExamples\Strict\Railway\Bomb(),
    ],
]);

var_dump($train);
