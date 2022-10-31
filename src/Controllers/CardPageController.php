<?php

namespace App\Controllers;

use App\Models\CardModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class CardPageController
{
    private PhpRenderer $renderer;
    private CardModel $model;

    public function __construct(PhpRenderer $renderer, CardModel $model)
    {
        $this->renderer = $renderer;
        $this->model = $model;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $cardTitle = $args['cardTitle'];
        $card = $this->model->getCardByTitle($cardTitle);
        return $this->renderer->render($response, 'card.php', ['card' => $card]);
    }
}