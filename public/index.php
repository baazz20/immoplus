<?php 

use Router\Router;

require '../vendor/autoload.php';

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\immoController@index');
$router->get('/posts/:id', 'App\Controllers\immoController@show');

$router->run();
