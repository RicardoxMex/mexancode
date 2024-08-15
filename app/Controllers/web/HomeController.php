<?php
namespace App\Controllers\Web;
use Core\Views;

class HomeController{
    
    function index() : void {
        Views::setTitle('Home');
        Views::setViewPath('home.index');
        Views::render();
    }

    function components() : void {
        Views::setTitle('Components');
        Views::setViewPath('home.components');
        Views::render();
    }

    public function store() : void {

        $resquests = request();
        var_dump($resquests->getInputHandler()->value('username'));
    }
}