<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/simple-bootstrap.php';

echo (new \VoodooPhpExamples\Buzzer())->buzz();
echo (new \VoodooPhpExamples\Buzzer())->buzz('BEEP');
echo (new \VoodooPhpExamples\Buzzer())->buzz('BOOP');
