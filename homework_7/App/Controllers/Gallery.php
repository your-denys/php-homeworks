<?php

namespace App\Controllers;
use App\Core\Viewer;

class Gallery extends Controller  {

    // public function index()
    // {
    //     echo "Gallery controller initialized.";
    // }
    public function update()
    {
        echo "Update controller initialized.";
    }
    public function delete() {
        echo "Delete controller initialized.";
    }


public function view() {
    $this->data = [
        'test' => 'Gallery',
        'test1' => 'Main',
    ];
        $this -> public_view('gallery/gallery-main');
    }
    public function create() {

    }

};