<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use FastRoute\Route;
use App\Http\Controllers\v1\UserController;




// Contoh penggunaan API
$router->get('/', function () use ($router) {
    return $router->app->version();
});

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

// Optional parameters https://lcoalhost:8000/optional/123
$router->get('/optional[/{param}]', function($param = null){
    return $param;
});


$router->group(['prefix' => 'api/v1', 'namespace' => 'v1'] ,function() use ($router) {

    // list users
    $router->get('/users', 'UserController@index');
    
    // create new user
    $router->post('/users', 'UserController@store');

    // update user
    $router->put('/users/{id}', 'UserController@update');

    // delete user
    $router->delete('/users/{id}', 'UserController@destroy');

    // show user
    $router->get('/users/{id}', 'UserController@show');

});