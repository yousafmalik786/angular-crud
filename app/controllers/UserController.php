<?php

class UserController extends BaseController {

    public function index() {
        return View::make('main');
    }
    public function getAllUsers(){
        $users = User::all();
        echo json_encode($users);
    }

}
