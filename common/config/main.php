<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\MemCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            # need to set connection info
        ],
    ],
];
