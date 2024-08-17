<?php
use Core\CoreBoot;
$core = new CoreBoot();

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/database/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/database/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => 'mysql',
            'host' => $GLOBALS['DB_HOST'],
            'name' => $GLOBALS['DB_DATABASE'],
            'user' => $GLOBALS['DB_USERNAME'],
            'pass' => $GLOBALS['DB_PASSWORD'],
            'port' => $GLOBALS['DB_PORT'],
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => 'mysql',
            'host' => $GLOBALS['DB_HOST'],
            'name' => $GLOBALS['DB_DATABASE'],
            'user' => $GLOBALS['DB_USERNAME'],
            'pass' => $GLOBALS['DB_PASSWORD'],
            'port' => $GLOBALS['DB_PORT'],
            'charset' => 'utf8',
        ],
        'testing' => [
            'adapter' => 'mysql',
            'host' => $GLOBALS['DB_HOST'],
            'name' => $GLOBALS['DB_DATABASE'],
            'user' => $GLOBALS['DB_USERNAME'],
            'pass' => $GLOBALS['DB_PASSWORD'],
            'port' => $GLOBALS['DB_PORT'],
            'charset' => 'utf8',
        ]
    ],
    'version_order' => 'creation'
];
