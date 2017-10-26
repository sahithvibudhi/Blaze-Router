<?php
/**
 * Created by PhpStorm.
 * User: sahithvibudhi
 * Date: 26/10/17
 * Time: 10:05 PM
 */

class Request
{

    public static function getParams($key)
    {
        return isset($_GET[ $key ]) ? $_GET[ $key ] : [ ];
    }

    public static function postParams($key)
    {
        return isset($_POST[ $key ]) ? $_POST[ $key ] : [ ];
    }

    public static function files($key)
    {
        return isset($_FILES[ $key ]) ? $_FILES[ $key ] : [ ];
    }

    public static function getURL()
    {
        return $_SERVER[REQUEST_URI];
    }

}