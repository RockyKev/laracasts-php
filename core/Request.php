<?php


class Request
{

    public static function uri()
    {

        // /names?names=Jeffery

        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),
            '/'
        );
    }

    public static function method()

    {
        $_SERVER['REQUEST_METHOD']; //GET OR POST
    }
}
