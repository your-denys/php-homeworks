<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;
use App\Models\Post as postModel; // alias позволяет подключать одноименные классы


class Posts extends Controller
{
    public function create()
    {
        if (!empty($_POST)) {
            echo "Create controller initialized.";
            $model = new postModel();
            $model->toArray();
            $model->save(array_intersect_key(array_filter($_POST), $model->toArray()));
        }
        $this->admin_view('posts/postCreate');

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