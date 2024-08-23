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
        Views::setTitle("Events");
        Views::setViewPath('admin.events.index');
        Views::render();
    }

    public function event($id){
        $event = Event::with('organizer', 'guests')->find($id);
        Views::setTitle($id);
        Views::setViewPath('admin.events.show');
        Views::setData(['event'=> $event]);
        Views::render();
    }
}