<?php

namespace App\Controllers;

use App\Core\Viewer;

class Main extends Controller  {
    public function index()
    {
        $this->data = [
            'test' => 'Gallery',
            'test1' => 'Main',
        ];
        $this->public_view();
        
    }
    public function update()
    {
        echo "Up date controller initialized.";
    }
    public function delete() {
        echo "Delete controller initialized.";
    }
};