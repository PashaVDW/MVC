<?php

namespace Controller;

use Core\Router;

class HomeController
{
    public function __construct()
    {
        //
    }

    public function index() {

        Router::renderTemplate('/layouts/app.view.php');
    }
}