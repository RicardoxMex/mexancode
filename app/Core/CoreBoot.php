<?php
namespace Core;
use Illuminate\Database\Capsule\Manager;
use Illuminate\Pagination\Paginator;
class CoreBoot{
    public function __construct(){
        $this->inicializaEnv();
        if($GLOBALS['DB_CONNECTION'] !== 'none'){
            $this->inicializeDatabase();
        }
        require_once $GLOBALS['DIR'].'/app/Core/helpers.php';
        $currentPage = input('page',1);
        Paginator::currentPageResolver(function () use ($currentPage) {
            return $currentPage;
        });
    }

    private function inicializaEnv(): void{
        global $DIR;
        $DIR = realpath(__DIR__ . '/../..');
        require_once($DIR."/config/bootstrap.php");
    }

    private function inicializeDatabase(){
        $capsule = new Manager();
        $capsule->addConnection([
            'driver' => 'mysql',
            'host' => $GLOBALS['DB_HOST'],
            'port' => $GLOBALS['DB_PORT'],
            'database' => $GLOBALS['DB_DATABASE'],
            'username' => $GLOBALS['DB_USERNAME'],
            'password' => $GLOBALS['DB_PASSWORD'],
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}