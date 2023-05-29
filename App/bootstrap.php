<?php

use Dotenv\Dotenv;

/**
 *  Initializes the autoloader
 */
require_once dirname(__FILE__) . '/../vendor/autoload.php';

/**
 * Initializes the .env
 */
$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->safeLoad();
