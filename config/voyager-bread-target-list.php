<?php

return [

    /*
     * If enabled for voyager-bread-target-list package.
     */
    'enabled' => env('VOYAGER_BREAD_TARGET_LIST_ENABLED', true),

    /*
     * The config_key for voyager-bread-target-list package.
     */
    'config_key' => env('VOYAGER_BREAD_TARGET_LIST_CONFIG_KEY', 'joy-voyager-bread-target-list'),

    /*
     * The route_prefix for voyager-bread-target-list package.
     */
    'route_prefix' => env('VOYAGER_BREAD_TARGET_LIST_ROUTE_PREFIX', 'joy-voyager-bread-target-list'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadTargetList\\Http\\Controllers',
    ],
];
