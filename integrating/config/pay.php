<?php

return [
    'consul' => [
        'address' => '47.106.178.79',
        'port'    => 8500,
        'register' => [
            'ID'                =>'rabbitMq-integrating',
            'Name'              =>'rabbitMq-integrating',
            'Tags'              =>['rabbitMq-integrating'],
            'Address'           =>'134.175.221.102',
            'Port'              =>8001,
            'Check'             => [
                'tcp'      => '134.175.221.102:8001',
                'interval' => '10s',
                'timeout'  => '2s',
            ],
            'Weights'=>[
                'passing'=>10,
                'warning'=>1
            ]
        ],
        'discovery' => [
            'dc' => 'dc1',
            'tag'=>'rabbitMq-integrating'
        ]
    ],
];