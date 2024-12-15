<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;
use App\Models\Gallery as GalleryModel; // alias позволяет подключать одноименные классы

Class Gallery extends Controller{
    public function create()
    {
        echo "Create controller initialized.";
    }
    public function update()
    {
        $model = new GalleryModel();
        $this->data = ['data' => $model->getElement($_GET['id'])];
        $this->admin_view('gallery/gallery-update');
    }
    public function delete()
    {
        echo "Delete controller initialized.";
    }
    public function index()
    {
        echo "Admin Gallery controller initialized.";
        $model = new GalleryModel();
        $this->data = ['data' => $model->getAllElements()]; // ?
        $this->admin_view('gallery/gallery-main');
    }

}