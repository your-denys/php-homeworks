<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;
use App\Core\Viewer;
class Main extends Controller
{
    public function index()
    {
        echo "Admin Main index initialized.";
        $this->data = [
            'test' => 'Dashboard',
            'test1' => 'Main',
        ];
        $this->admin_view();
    }
    
}