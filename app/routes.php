<?php
declare(strict_types=1);

use App\Controllers\AddCardToDbController;
use App\Controllers\CardAddedToDbController;
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

    $app->post('/createcardconfirmation', AddCardToDbController::class);

    $app->get('/createcardconfirmed', CardAddedToDbController::class);

};
