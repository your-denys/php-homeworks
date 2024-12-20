<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;
use App\Models\GalleryCategory as GalleryCategoryModel; // alias позволяет подключать одноименные классы

Class GalleryCategory extends Controller{
    public function create()
    {
        if (!empty($_POST)) {
            echo "Create controller initialized.";
            $model = new GalleryCategoryModel();
            $model->toArray();
            $model->save(array_intersect_key(array_filter($_POST), $model->toArray()));
        }   
        $this->admin_view('galleryCategory/galleryCreate');

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