<?php

namespace App\Controllers;
use App\Models\Post as PostModel; // alias позволяет подключать одноименные классы

class Posts extends Controller
{
    public function index()
    {
        $model = new PostModel();
        $this->data = ['data' => $model->getAllElements()]; // ?
        $this->public_view('posts/postMain');
    }
};