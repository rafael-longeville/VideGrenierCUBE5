<?php

namespace App;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config
{

    /**
     * Cookie Configuration
     */
    const COOKIE_DEFAULT_EXPIRY = 604800; // 1 week
    const COOKIE_USER = 'user';

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'db';

    /**
     * Database port
     * @var string
     */
    const DB_PORT = '3306';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'videgrenierenligne';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'webapplication';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = '653rag9T';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;
}
