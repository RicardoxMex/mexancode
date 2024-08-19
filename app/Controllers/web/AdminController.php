<?php
namespace App\Controllers\Web;
use App\Models\Event;
use Core\Views;

class AdminController {
    public function __construct() {     
        Views::setLayout("auth-admin");
    }
    public function index(){ 
        Views::setTitle("Admin");
        Views::setViewPath('admin.index');
        Views::render();
    }

    public function events(){
        $_events = Event::all();
        Views::setTitle("Admin");
        Views::setViewPath('admin.events');
        Views::setData(['events'=> $_events]);
        Views::render();
    }
}