<?php
require_once("../vendor/autoload.php");
use Core\CoreBoot;
use Core\Route;
use Core\Views;

try {
    $core = new CoreBoot();
    new Route();
} catch (\Throwable $th) {
    //throw $th;
    echo $th->getMessage();
}
