<?php

namespace App\Core;

class Viewer {
    private array $data = [];
    public function public_template(string $part_name = 'main'):void {
        extract($this->data); // разбивает ключи массива на переменніе
        include __DIR__ . '/../../public/templates/template-public.php';
    }
    public function admin_template(string $part_name = 'main'):void {
        extract($this->data);
        include __DIR__ . '/../../public/templates/template-admin.php';
    }

    public function setData (array $data):void {
        $this->data = $data;
    }
}