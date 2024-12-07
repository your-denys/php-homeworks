<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;
use App\Models\GalleryCategory as GalleryCategoryModel; // alias позволяет подключать одноименные классы

Class GalleryCategory extends Controller{
    public function create()
    {
        echo "Create controller initialized.";
    }
    public function update()
    {
        $model = new GalleryCategoryModel();
        $this->data = ['data' => $model->getElement($_GET['id'])];
        $this->admin_view('galleryCategory/galleryUpdate');
    }
    public function delete()
    {
        echo "Delete controller initialized.";
    }
    public function index()
    {
        echo "Admin Gallery category controller initialized.";
        $model = new GalleryCategoryModel();
        $this->data = ['data' => $model->getAllElements()]; // ?
        $this->admin_view('galleryCategory/galleryMain');
    }
}