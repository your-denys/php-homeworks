<?php
namespace App\Core;

class Router
{
    const CONTROLLER_NAMESPACE = 'App\Controllers\\';
    const ADMIN_NAMESPACE = 'App\Controllers\Admin\\';

    private array $request_uri = [];
    private string $method = '';
    private string $controller = '';
    private $config = [];
    private string $zone = '';

    public function __construct($config)
    {
        $this->config = $config;
        $this->proccessRequest();
        $this->setZone();
        $this->setControllersName();
        $this->setMethod();
    }

    public function run()
    {

        $this->validate();

        $namespace = $this->getNamespace();

        if (!class_exists($namespace)) {
            $this->controller = 'Error';
            $this->method = 'index';
            $namespace = $this->getNamespace();
        }

        $controller = new $namespace;

        if (!method_exists($controller, $this->method)) {
            $this->controller = 'Error';
            $this->method = 'index';
            $namespace = $this->getNamespace();
            $controller = new $namespace;
        }
        $controller->{$this->method}();
    }



    private function validate(): void
    {
        $routeKey = $this->zone === 'admin'
            ? 'admin/' . $this->controller . '/' . $this->method
            : $this->controller . '/' . $this->method;
        if (!isset($this->config[$routeKey])) {
            $this->controller = 'Error';
            $this->method = 'index';
        } else {
            $this->config = explode('/', $this->config[$routeKey]);
            $this->controller = $this->zone === 'admin' ? $this->config[1] : $this->config[0];
            $this->method = $this->zone === 'admin' ? $this->config[2] : $this->config[1];
        }
    }


    private function getNamespace(): string
    {
        $baseNamespace = $this->zone === 'admin' ? self::ADMIN_NAMESPACE : self::CONTROLLER_NAMESPACE;
        return $baseNamespace . ucfirst($this->controller);
    }

    private function setControllersName(): void
    {
        if ($this->zone === 'admin') {
            $this->controller = !empty($this->request_uri[2]) ? $this->request_uri[2] : 'main';
        } else {
            $this->controller = !empty($this->request_uri[1]) ? $this->request_uri[1] : 'main';
        }
    }

    private function setMethod(): void
    {
        if ($this->zone === 'admin') {
            $this->method = !empty($this->request_uri[3]) ? $this->request_uri[3] : 'index';
        } else {
            $this->method = !empty($this->request_uri[2]) ? $this->request_uri[2] : 'index';
        }
    }

    private function proccessRequest(): void
    {
        $uri = isset($_SERVER['REDIRECT_URL']) ? rtrim($_SERVER['REDIRECT_URL'], '/') : '';
        $this->request_uri = $uri ? explode('/', $uri) : [];
    }

    private function setZone(): void
    {
        $this->zone = !empty($this->request_uri[1]) && $this->request_uri[1] === 'admin' ? 'admin' : 'public';
    }
}