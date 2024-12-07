<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;
use App\Models\PostCategory as PostCategoryModel;

Class PostCategory extends Controller{
    public function create()
    {
        echo "Create controller initialized.";
    }
    public function update()
    {
        $model = new PostCategoryModel();
        $this->data = ['data' => $model->getElement($_GET['id'])];
        $this->admin_view('postsCategory/postsCategoryUpdate');
    }
    public function delete()
    {
        echo "Delete controller initialized.";
    }
    public function index()
    {
        echo "Admin Post category controller initialized.";
        $model = new PostCategoryModel();
        $this->data = ['data' => $model->getAllElements()]; // ?
        $this->admin_view('postsCategory/postsCategoryMain');
    }
}