<?php

require __DIR__ . '/../vendor/autoload.php';
// require __DIR__ . '/init-strict.php';

$train = new \VoodooPhpExamples\Strict\Train(
    [
        new \VoodooPhpExamples\Strict\Wagon(),
        new \VoodooPhpExamples\Strict\Wagon(),
        new \stdClass(),
    ]
);

$train->boardPassengers([
    [
        new \VoodooPhpExamples\Strict\Passenger('Maximilian', 'Berghof'), // @TODO
        new \VoodooPhpExamples\Strict\Passenger('Andreas', 'Heigl'),
    ],
    [
        new \VoodooPhpExamples\Strict\Passenger('Benjamin', 'Eberlei'),
        new \VoodooPhpExamples\Strict\Passenger('Kore', 'Normann'), // @TODO check name
    ],
    [
        new \VoodooPhpExamples\Strict\Passenger('Marco', 'Pivetta'),
        new \VoodooPhpExamples\Strict\Bomb(),
    ],
]);

var_dump($train);
