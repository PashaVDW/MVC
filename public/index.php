<?php

require_once '../routes/router.php';

$router = new Router();

// Add the routes
$router->add('', ['controller' => 'home', 'action' => 'index']);
$router->add('posts', ['controller' => 'posts', 'action' => 'index']);
$router->add('posts/new', ['controller' => 'posts', 'action' => 'new']);

// Match the requested route
$url = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';

if($router->match($url)) {
    $params = $router->getParams();
    $controller = $params['controller'];
    $action = $params['action'];
    echo "Controller: $controller, Action: $action";
} else {
    throw new Exception("No route found for URL : " . $url);
}
