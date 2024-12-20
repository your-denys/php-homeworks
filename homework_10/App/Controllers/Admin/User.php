<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;
use App\Models\User as UserModel;

Class User extends Controller{
    public function create()
    {
        if (!empty($_POST)) {
            echo "Create controller initialized.";
            $model = new UserModel();
            $model->toArray();
            $model->save(array_intersect_key(array_filter($_POST), $model->toArray()));
        }
        $this->admin_view('user/userCreate');
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