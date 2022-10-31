<?php

namespace App\Controllers;

use App\Models\CardModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class AddCardToDb
{
    private PhpRenderer $renderer;
    private CardModel $model;

    public function __construct(PhpRenderer $renderer, CardModel $model)
    {
        $this->renderer = $renderer;
        $this->model = $model;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $this->model->addCardToDb($_POST);
        return $this->renderer->render($response,'cardcreation.php');
    }
}