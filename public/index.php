<?php

use Core\Router;

const BASE_PATH = __DIR__ . '/../';

require_once dirname(__FILE__) . '/../App/bootstrap.php';

require '../functions.php';

require '..\Core\Router.php';

$router = new Router();

$routes = require '../routes/web.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);