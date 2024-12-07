<!-- Для создания мапинга в терминал composer init -> composer dump -->
<?php
require_once 'vendor/autoload.php'; // Нужно подключить автолоад в индекс 
$config = require 'config/controller.php'; // поместили в config массив с controller.php

use App\Core\Router; 

$router = new Router($config);
print_r($router->run());
