<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/init-strict.php';

$object = new \VoodooPhpExamples\Strict\ClassWithIntProperty();

var_dump($object);
