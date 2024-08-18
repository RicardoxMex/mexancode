<?php

namespace Core;

class Session
{
    /**
     * @return void
     */
    public static function start(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    /**
     * @param string $name
     * 
     * @return mixed
     */
    public static function getSession(string $name): mixed
    {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        }
        return false;
    }

    /**
     * @param string $name
     * @param mixed $data
     * 
     * @return void
     */
    public static function setSession(string $name, mixed $data): void
    {
        /** @psalm-suppress MixedAssignment */
        $_SESSION[$name] = $data;
    }

    /**
     * @param string $name
     * 
     * @return void
     */
    public static function delete(string $name): void
    {
        unset($_SESSION[$name]);
    }

    /**
     * @return void
     */
    public static function destroy(): void
    {
        @session_destroy();
    }
}
