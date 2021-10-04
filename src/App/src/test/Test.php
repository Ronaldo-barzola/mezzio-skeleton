<?php

declare (strict_types = 1);

namespace App\Test;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use App\Test\Controller;

// class Test implements RequestHandlerInterface
// {
//     public function handle(ServerRequestInterface $request): ResponseInterface
//     {

//         // $cuerpo=$request->getBody()->getContents();
//         $cuerpo = $request->getParsedBody();
//         $id = $cuerpo["a"]; 
//         // $relations = $this->serializer->deserialize($cuerpo);

//         return new JsonResponse($id);
//     }
// }

class TestController extends Controller{


    public function lotesListar(ServerRequestInterface $request)
    {
    
    }
}