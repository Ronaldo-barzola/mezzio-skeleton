<?php

declare (strict_types = 1);

namespace App\ProcDeuda;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use App\ProcDeuda\Controller;

class ProcDeuda implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {

        $cuerpo = array(
            array(
                'numpro' => 1,
                'fecpro' => 2021-10-25,
                'tipcon' => 'Principales',
                'tipval' => 'Orden de Pago',
                'anoini' => '2021',
                'anofin' => '2021',
                'monini' => '1000',
                'monfin' => '5000',
                'canpro' => 17
            ),
            array(
                'numpro' => 2,
                'fecpro' => 2021-10-25,
                'tipcon' => 'Principales',
                'tipval' => 'Resol. Determinacion',
                'anoini' => '2021',
                'anofin' => '2021',
                'monini' => '1000',
                'monfin' => '5000',
                'canpro' => 36
            ),
        );
        return new JsonResponse($cuerpo);
    }
}