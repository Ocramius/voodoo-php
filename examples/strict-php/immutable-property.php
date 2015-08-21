<?php

require __DIR__ . '/../vendor/autoload.php';
// require __DIR__ . '/init-strict.php';

$object = new \VoodooPhpExamples\Strict\ClassWithImmutableProperty();

$object->iCannotBeChanged = 'foo';
$object->iCannotBeChanged = 'bar';

var_dump($object);
