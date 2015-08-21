<?php

require_once __DIR__ . '/../vendor/autoload.php';

\StrictPhp\StrictPhpKernel::bootstrap(
    [
        'debug'        => true,
        'cacheDir'     => realpath(__DIR__ . '/cache/'),
        'includePaths' => [
            realpath(__DIR__ . '/../src/VoodooPhpExamples/Strict'),
        ],
    ],
    array_merge(
        \StrictPhp\StrictPhpKernel::DEFAULT_FEATURES,
        [
            \StrictPhp\StrictPhpKernel::CHECK_STATE_AFTER_CONSTRUCTOR_CALL,
            \StrictPhp\StrictPhpKernel::CHECK_PROPERTY_WRITE_IMMUTABILITY,
        ]
    )
);
