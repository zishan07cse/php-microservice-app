<?php
namespace App\Core;

class Router {
    private $routes = [];

    public function get($path, $handler) {
        $this->routes[$path] = $handler;
    }

    public function dispatch($uri) {
        $path = parse_url($uri, PHP_URL_PATH);

        if (!isset($this->routes[$path])) {
            echo "404";
            return;
        }

        [$class, $method] = $this->routes[$path];
        (new $class)->$method();
    }
}