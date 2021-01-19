<?php

namespace App\Controllers;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;

class HomeController extends BaseController
{
    public function index(Response $response, Twig $view)
    {
        return $view->render($response, 'home.twig');
    }

    public function api(Response $response)
    {
        return $this->json($response, ['status' => 'success', 'data' => 'Hello World!']);
    }
}