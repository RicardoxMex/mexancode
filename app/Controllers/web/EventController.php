<?php
namespace App\Controllers\Web;
use App\Models\Event;
use Core\Views;
use Pecee\Controllers\IResourceController;
 class EventController implements IResourceController {
    public function __construct() {     
        Views::setLayout("auth-admin");
    }
    public function index(){
        Views::setTitle("Events");
        Views::setViewPath('events.index');
        Views::render();
    }
    public function create(){
        Views::setTitle("Create Events");
        Views::setViewPath('events.create');
        Views::render();
    }
    public function store(){}
    public function show($id){
        $event = Event::with('organizer', 'guests')->find($id);
        Views::setTitle($id);
        Views::setViewPath('events.show');
        Views::setData(['event'=> $event]);
        Views::render();
    }
    public function edit($id){}
    public function update($id){}
    public function destroy($id){}
 }