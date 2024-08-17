<?php
namespace Core;
use App\Controllers\Web\ErrorController;
use Pecee\SimpleRouter\SimpleRouter;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;



class Route
{
    function __construct()
    {
        SimpleRouter::group(['exceptionHandler' => \Core\Handlers\CustomExceptionHandler::class], function () {
            SimpleRouter::group(['prefix' => '/api'], function () {
                require_once $GLOBALS['DIR'] . '/routes/api.php';
            });

            require_once $GLOBALS['DIR'] . '/routes/web.php';
        });
        SimpleRouter::start();
    }
}