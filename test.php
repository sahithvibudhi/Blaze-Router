<?php

error_reporting(-1);
ini_set('display_errors', 'On');

require('Router.php');
require('Engine.php');
require('Request.php');
require('Response.php');

$router = new Router();

$router->
    get('/', function(){
        echo "Hello";
    });

$router->get('/hello', function(){
    echo "hello 2";
});


$router->run();

echo 'done';