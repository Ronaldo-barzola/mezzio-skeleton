<?php

declare (strict_types = 1);

namespace App\Test;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use App\Test\Controller;

class Test implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {

        $cuerpo = $request->getParsedBody();
        return new JsonResponse($cuerpo);
    }
}