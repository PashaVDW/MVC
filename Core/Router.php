<?php

namespace Core;

class Router
{
    protected static array $routes = [];

    public static function get($uri, $controller)
    {
        self::$routes = [
            'uri'        => $uri,
            'controller' => $controller,
            'method'     => 'GET'
        ];
    }

    public function route($uri, $method)
    {
        foreach (self::$routes as $route)
        {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)){
                return require '/../' . $route['controller'];
            }
        }

        return exit(404);
    }

    public static function getRoutes(): array
    {
        return self::$routes;
    }

    /**
     * Render a view file
     *
     * @param string $view  The view file
     * @param array  $args  Associative array of data to display in the view (optional)
     *
     * @return void
     */
    public static function render(string $view, array $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = dirname(__DIR__) . "/../views/$view";  // relative to Core directory

        if (is_readable($file)) {
            require $file;
        } else {
            throw new \Exception("$file not found");
        }
    }

    /**
     * Render a view template using Twig
     *
     * @param string $template  The template file
     * @param array  $args  Associative array of data to display in the view (optional)
     *
     * @return void
     */
    public static function renderTemplate(string $template, array $args = [])
    {
        static $twig = null;

        if ($twig === null) {
            $loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__) . '/App/Views');
            $twig = new \Twig\Environment($loader);
        }

        echo $twig->render($template, $args);
    }
}