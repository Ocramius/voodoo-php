<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/simple-bootstrap.php';

$instance = new \VoodooPhpExamples\AccessibleObject();

$instance->publicFieldThatShouldAlwaysBeInteger = 10;

var_dump($instance->publicFieldThatShouldAlwaysBeInteger);

$instance->publicFieldThatShouldAlwaysBeInteger = 20;

var_dump($instance->publicFieldThatShouldAlwaysBeInteger);

$instance->publicFieldThatShouldAlwaysBeInteger = 'foo';
