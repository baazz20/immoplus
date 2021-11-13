<?php 

use Router\Router;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\immoController@welcome');
$router->get('/posts', 'App\Controllers\immoController@index');
$router->get('/posts/:id', 'App\Controllers\immoController@show');

$router->run();
