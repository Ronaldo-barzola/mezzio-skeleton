<?php

declare (strict_types = 1);

namespace App\TipoValor;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use App\TipoValor\Controller;

class TipoValor implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {

        $cuerpo = array(
            array(
                'id' => 1,
                'valor' => 'Orden de Pago'
            ),
            array(
                'id' => 2,
                'valor' => 'Resolución de Determinación'
            ),
        );
        return new JsonResponse($cuerpo);
    }
}