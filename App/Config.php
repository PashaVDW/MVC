<?php

namespace App;

/**
 * Application configuration
 *
 * PHP version 8.2
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = '127.0.0.1:8000';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'Driftly';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'root';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = '';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;
}