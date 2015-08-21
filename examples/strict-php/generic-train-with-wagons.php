<?php

require __DIR__ . '/../vendor/autoload.php';
// require __DIR__ . '/init-strict.php';

$train = new \VoodooPhpExamples\Strict\Railway\Train(
    [
        new \VoodooPhpExamples\Strict\Railway\Wagon(),
        new \VoodooPhpExamples\Strict\Railway\Wagon(),
        new \stdClass(),
    ]
);

$train->boardPassengers([
    [
        new \VoodooPhpExamples\Strict\Railway\Passenger('Maximilian', 'Berghof'), // @TODO
        new \VoodooPhpExamples\Strict\Railway\Passenger('Andreas', 'Heigl'),
    ],
    [
        new \VoodooPhpExamples\Strict\Railway\Passenger('Benjamin', 'Eberlei'),
        new \VoodooPhpExamples\Strict\Railway\Passenger('Kore', 'Normann'), // @TODO check name
    ],
    [
        new \VoodooPhpExamples\Strict\Railway\Passenger('Marco', 'Pivetta'),
        new \VoodooPhpExamples\Strict\Railway\Bomb(),
    ],
]);

var_dump($train);
