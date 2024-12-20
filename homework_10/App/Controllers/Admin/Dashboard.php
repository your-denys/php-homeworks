<?php

namespace App\Controllers\Admin;
use App\Controllers\Controller;

Class Dashboard extends Controller{
    public function index()
    {
        echo "Admin Dashboard controller initialized.";
        $this->admin_view();
    }
 
}

