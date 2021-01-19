<?php

namespace App\Controllers;
use Psr\Http\Message\ResponseInterface as Response;

class BaseController
{
    public function json(Response $response, $data, int $statusCode = 200)
    {
       $payload = json_encode($data);
       $response->getBody()->write($payload);
       return $response
          ->withHeader('Content-Type', 'application/json')
          ->withStatus($statusCode);
    }
}