<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;
use App\Models\Gallery as GalleryModel; // alias позволяет подключать одноименные классы

class Gallery extends Controller
{
    public function create()
    {
        if (!empty($_POST)) {
            echo "Create controller initialized.";
            $model = new GalleryModel();
            $model->toArray();
            $model->save(array_intersect_key(array_filter($_POST), $model->toArray()));
        }
        $this->admin_view('gallery/gallery-create');
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