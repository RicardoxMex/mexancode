<?php
namespace Core;
use Pecee\SimpleRouter\SimpleRouter;

require_once $GLOBALS['DIR'].'/routes/web.php';

class Route
{
    function __construct() {
        SimpleRouter::setDefaultNamespace('\Demo\Controllers');
        SimpleRouter::start();
    }   
}