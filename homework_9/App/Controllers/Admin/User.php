<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;
use App\Models\User as UserModel;

Class User extends Controller{
    public function create()
    {
        echo "Create controller initialized.";
    }
    public function update()
    {
        $model = new UserModel();
        $this->data = ['data' => $model->getElement($_GET['id'])];
        $this->admin_view('user/userUpdate');
    }
    public function delete()
    {
        echo "Delete controller initialized.";
    }
    public function index()
    {
        echo "Admin User controller initialized.";
        $model = new UserModel();
        $this->data = ['data' => $model->getAllElements()]; // ?
        $this->admin_view('user/userMain');
    }
}