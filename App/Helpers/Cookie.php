<?php

namespace App\Helpers;

class Cookie
{
    /**
     * Crée un cookie
     *
     * @param string $name
     * @param string $value
     * @param integer $expire
     * @return void
     */
    public static function set(string $name, string $value, int $expire)
    {
        setcookie($name, $value, time() + $expire, '/');
    }

    /**
     * Récupère un cookie
     *
     * @param string $name
     * @return string
     */
    public static function get(string $name): string
    {
        return $_COOKIE[$name];
    }

    /**
     * Supprime un cookie
     *
     * @param string $name
     * @return void
     */
    public static function delete(string $name)
    {
        setcookie($name, '', time() - 3600, '/');
    }

    /**
     * Vérifie si un cookie existe
     *
     * @param string $name
     * @return boolean
     */
    public static function exists(string $name): bool
    {
        return isset($_COOKIE[$name]);
    }
}