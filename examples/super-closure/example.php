<?php

require_once __DIR__ . '/../vendor/autoload.php';

$serializer = new SuperClosure\Serializer();

$serialized = $serializer->serialize(function () {
    echo 'FILE CONTENTS: ' . file_get_contents(__FILE__);
});

$serializer->unserialize($serialized)->__invoke();
