<?php
namespace App\Controllers\Web;
use Core\Views;

class ErrorController{
    function notFound() : void {
        Views::setTitle('Errors');
        Views::setViewPath('errors.index');
        Views::render();
    }
}