<?php
declare(strict_types=1);

use App\Controllers\AddCardToDb;
use App\Controllers\CardAddedToDb;
use App\Controllers\CardPageController;

use App\Controllers\CreateCardController;
use App\Controllers\HomePageController;
use Slim\App;
use Slim\Views\PhpRenderer;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', HomePageController::class);

    $app->get('/card/{cardTitle}', CardPageController::class);

    $app->get('/createcard', CreateCardController::class);

    $app->post('/createcardconfirmation', AddCardToDb::class);

    $app->get('/createcardconfirmed', CardAddedToDb::class);

};
