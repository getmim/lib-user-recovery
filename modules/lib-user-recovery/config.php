<?php

return [
    '__name' => 'lib-user-recovery',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/lib-user-recovery.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'https://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-user-recovery' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-user' => NULL
            ],
            [
                'lib-model' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'LibUserRecovery\\Model' => [
                'type' => 'file',
                'base' => 'modules/lib-user-recovery/model'
            ]
        ],
        'files' => []
    ]
];