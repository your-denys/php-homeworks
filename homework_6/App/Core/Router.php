<?php
namespace App\Core;

// Магические методы — методы, которые переопределяют действие PHP по умолчанию, когда над объектом выполняются отдельные действия.
// Функиця конструктор ( __construct()) - функция которая выполняется автоматически при создании класса, когда обращаемся к классу как к объекту 
//    Деструктор (__destruct()) - функция которая отраьатывает когда объект класса уничтожается

class Router
{
    const CONTROLLER_NAMESPACE = 'App\Controllers\\';
    private array $request_uri = [];
    private string $method = '';
    private string $controller = '';
    private $config = [];

    public function __construct($config)
    {
        $this->config = $config;
        $this->proccessRequest();
        $this->setControllersName();
        $this->setMethod();
    }
    public function run()
    {
        $this->validate();
        $namespace = $this->getNamespace();
        $controller = new $namespace;
        $controller->{$this->method}();
    }

    private function validate(): void
    {
        if (!isset($this->config[$this->controller . '/' . $this->method])) { // проверка на наличие
            $this->controller = 'Error';
            $this->method = 'index';
        } 
        // else {
        //     $this->config = explode('/', $this->config[$this->controller . '/' . $this->method]);
        //     // $this->controller = $config[0];
        //     // $this->method = $config[1] ;
        // }
        }

    private function getNamespace(): string
    {
        return self::CONTROLLER_NAMESPACE . ucfirst($this->controller);
    }
    private function setMethod(): void
    {
        $this->method = !empty($this->request_uri[2]) ? $this->request_uri[2] : 'index';
    }
    private function setControllersName(): void
    {
        $this->controller = !empty($this->request_uri[1]) ? $this->request_uri[1] : 'main';
    }

    private function proccessRequest(): void
    {
        $uri = isset($_SERVER['REQUEST_URI']) ? rtrim($_SERVER['REQUEST_URI'], '/') : '';
        $this->request_uri = $uri ? explode('/', $uri) : [];
    }
}

