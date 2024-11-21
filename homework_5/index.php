<!-- Для создания мапинга в терминал composer init -> composer dump -->
<?php
require_once 'vendor/autoload.php'; // Нужно подключить автолоад в индекс 
use App\Core\Router; 

$router = new Router();
$router->run();