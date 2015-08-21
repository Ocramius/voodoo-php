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

var_dump($train);
