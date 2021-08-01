<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['prefix' => 'v1'], function() use ($router) {
    $router->get('/', 'ExampleController@index');
    $router->get('/{id:[0-9]+}', 'ExampleController@show');
    $router->post('/', 'ExampleController@store');
    $router->put('/{id:[0-9]+}', 'ExampleController@update');
    $router->patch('/{id:[0-9]+}', 'ExampleController@update');
    $router->delete('/{id:[0-9]+}', 'ExampleController@destroy');
});
