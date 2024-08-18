<?php
use Core\Session;
require_once("../vendor/autoload.php");
use Core\CoreBoot;
use Core\Route;
Session::start();

try {
    $core = new CoreBoot();
    new Route();
} catch (\Throwable $th) {
    //throw $th;
    echo $th->getMessage();
}
