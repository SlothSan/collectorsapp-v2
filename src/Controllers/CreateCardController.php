<?php

namespace App\Controllers;

use App\Models\CardModel;
use http\Env\Response;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class CreateCardController
{
    private PhpRenderer $renderer;

    public function __construct(PhpRenderer $renderer, CardModel $model)
    {
        $this->renderer = $renderer;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        return $this->renderer->render($response, 'createcard.php');
    }
}