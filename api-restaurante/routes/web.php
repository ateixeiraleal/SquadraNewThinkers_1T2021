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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/cozinhas', 'CozinhaController@obterTodos');
$router->post('/cozinhas', 'CozinhaController@criar');
$router->put('/cozinhas/{id}', 'CozinhaController@atualizar');
$router->get('/cozinhas/{id}', 'CozinhaController@obterPorId');
$router->delete('/cozinhas/{id}', 'CozinhaController@excluir');
