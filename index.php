<?php
require __DIR__ . '/vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

use App\Controllers\HomeController;


$app = AppFactory::create();




$app->get('/{name}', HomeController::class . ':index');


$app->run();