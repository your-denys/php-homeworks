<?php 

namespace App\Controllers;

use App\Core\Viewer;

class Controller  {
    protected array $data = [];

    public function public_view(string $part_name = 'main') {
        $viewer = new Viewer();
        $viewer -> setData($this->data);
        $viewer->public_template($part_name);
    }
    public function admin_view(string $part_name = 'admin/main') {
        $viewer = new Viewer();
        $viewer -> setData($this->data);
        $viewer->admin_template($part_name);
    }
}