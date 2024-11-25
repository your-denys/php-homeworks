<?php
namespace App\Core;

class Router
{
    const CONTROLLER_NAMESPACE = 'App\Controllers\\';
    public function run()
    {
        $namespace = $this->getNamespace();
        $method = $this->getMethod();
        if (!class_exists($namespace)) {
            $namespace = self::CONTROLLER_NAMESPACE . 'Error';
        }
        $controller = new $namespace;
        if (method_exists($controller, $method)) {
            $controller->$method();
        } else {
            $controller = new (self::CONTROLLER_NAMESPACE . 'Error');
            $controller->index();
        }
    }

    private function getNamespace(): string
    {
        $controllerName = $this->prepareControllersName();
        $namespace = is_string($controllerName) ? $controllerName : $controllerName[1];
        return self::CONTROLLER_NAMESPACE . ucfirst($namespace);
    }

    //ДЗ. Метод для добавления пути в URL
    private function getMethod(): string
    {
        $controllerName = $this->prepareControllersName();
        return is_array($controllerName) ? ($controllerName[2] ?? 'index') : 'index';
    }
    ////////////////////////////////////////////////

    private function prepareControllersName(): array|string
    {    
        $result = 'main';
        if (isset($_SERVER['REQUEST_URI'])) {
            $uri = rtrim($_SERVER['REQUEST_URI'], '/'); 

            $result = explode('/',$uri);
        }
        if (is_array($result) && empty($result[1])) {
            $result = 'Main';
        }
        return $result;
    }
}
