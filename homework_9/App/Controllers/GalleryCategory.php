<?php

namespace App\Controllers;
use App\Models\GalleryCategory as GalleryCategoryModel; // alias позволяет подключать одноименные классы

class GalleryCategory extends Controller
{
    public function index()
    {
        $model = new GalleryCategoryModel();
        $this->data = ['data' => $model->getAllElements()]; // ?
        $this->public_view('galleryCategory/galleryMain');
    }
};