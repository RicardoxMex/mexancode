<?php
namespace App\Controllers\Web;
use Core\Views;
class AdminController {
    public function index(){
        Views::setLayout("auth-admin");
        Views::setViewPath('admin.index');
        Views::render();
    }
}