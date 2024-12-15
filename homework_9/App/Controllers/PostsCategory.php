<?php

namespace App\Controllers;
use App\Models\PostCategory as PostCategoryModel; // alias позволяет подключать одноименные классы

class PostsCategory extends Controller
{
    public function index()
    {
        $model = new PostCategoryModel();
        $this->data = ['data' => $model->getAllElements()]; // ?
        $this->public_view('postsCategory/postsCategoryMain');
    }
};