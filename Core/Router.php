<?php

namespace Core;

class Router
{
    protected array $routes = [];

    public function get($uri, $controller)
    {
        $this->routes = [
            'uri'        => $uri,
            'controller' => $controller,
            'method'     => 'GET'
        ];
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route)
        {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)){
                return require '/../' . $route['controller'];
            }
        }

        $this->abort();
    }

    /**
     * @param int $code
     *
     * @return void
     */
    protected function abort(int $code = 404)
    {
        http_response_code($code);
        die();
    }

}