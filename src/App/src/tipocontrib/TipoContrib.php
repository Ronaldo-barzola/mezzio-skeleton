<?php

declare (strict_types = 1);

namespace App\TipoContrib;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use App\TipoContrib\Controller;

class TipoContrib implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {

        $cuerpo = array(
            array(
                'id' => 1,
                'valor' => 'Pequeño'
            ),
            array(
                'id' => 2,
                'valor' => 'Mediano'
            ),
            array(
                'id' => 3,
                'valor' => 'Principal'
            ),
        );
        return new JsonResponse($cuerpo);
    }
}