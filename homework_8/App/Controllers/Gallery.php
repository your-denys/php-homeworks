<?php

namespace App\Controllers;
// use App\Core\Viewer;
use App\Models\Gallery as GalleryModel; // alias позволяет подключать одноименные классы

class Gallery extends Controller
{
    public function view()
    {
        $model = new GalleryModel();
        $this->data = ['data' => $model->getAllElements()]; // ?
        $this->public_view('gallery/gallery-main');
    }
};