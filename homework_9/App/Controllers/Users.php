<?php

namespace App\Controllers;
use App\Models\user as userModel; // alias позволяет подключать одноименные классы

class Users extends Controller
{
    public function index()
    {
        $model = new userModel();
        $this->data = ['data' => $model->getAllElements()]; // ?
        $this->public_view('user/userMain');
    }
};