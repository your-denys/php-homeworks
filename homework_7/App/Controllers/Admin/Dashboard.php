<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;

Class Dashboard extends Controller{
    public function index()
    {
        echo "Admin Dashboard controller initialized.";
           $this->data = [
            'test' => 'Dashboard',
            'test1' => 'Main',
        ];
        $this->admin_view();
    }
 
}

