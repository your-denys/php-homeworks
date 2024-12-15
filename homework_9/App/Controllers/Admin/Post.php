<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;
use App\Models\Post as postModel; // alias позволяет подключать одноименные классы


Class Post extends Controller{
    public function create()
    {
        echo "Create controller initialized.";
    }
    public function update()
    {
        $model = new postModel();
        $this->data = ['data' => $model->getElement($_GET['id'])];
        $this->admin_view('posts/postUpdate');
    }
    public function delete()
    {
        echo "Delete controller initialized.";
    }
    public function index()
    {
        echo "Admin Post controller initialized.";
        $model = new postModel();
        $this->data = ['data' => $model->getAllElements()]; // ?
        $this->admin_view('posts/postMain');
    }
}