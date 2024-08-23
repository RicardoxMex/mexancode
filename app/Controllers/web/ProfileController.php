<?php
namespace App\Controllers\Web;
use Core\Views;
use Pecee\Controllers\IResourceController;
 class ProfileController implements IResourceController {
    public function __construct() {     
        Views::setLayout("auth-admin");
    }
    public function index(){
        Views::setTitle("Profile");
        Views::setViewPath('profile.index');
        Views::render();
    }
    public function create(){}
    public function store(){}
    public function show($id){}
    public function edit($id){}
    public function update($id){}
    public function destroy($id){}
 }