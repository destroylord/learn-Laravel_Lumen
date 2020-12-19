<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use FastRoute\Route;


// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });
$router->get('foo/', function() use ($router) {
    return 'hello';
});

// key generate .env
$router->get('/key', function(){
    return \Illuminate\Support\Str::random(32);
});

$router->get('/boo', function(){
    return 'hello bo';
});

// require parameters
$router->get('/foo/{id}', function($id) {
    return 'hello '.$id;
});

$router->get('foo/{postId}/comments/{commentId}', function($postId, $commentId) {
    return 'hello '.$postId. ' post comment : '.$commentId;
});

// Optional parameters
$router->get('/optional[/{param}]', function($param = null){
    return $param;
});