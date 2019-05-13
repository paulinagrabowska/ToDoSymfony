<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HelloWorldController
 * @package App\Controller
 */

class HelloWorldController {

//    /**
//     * Index action
//     * @param null|string $name User input
//     * @return Response
//     * @Route("/{name}")
//     * @Route("/")
//     */
//
//    public function index(string $name = null): Response {
//
//        $name = $name ?? 'World';
//        return new Response('Hello '.$name.'!');
//    }

    /**
     * Index action
     * @param string $name User input
     * @return Response
     * @Route(
     *     "/{name}",
     *     defaults={"name" : "World"},
     *     requirements={"name" : "[a-zA-Z]+"},
     * )
     */

    public function index(string $name): Response {
        return new Response('Hello '.$name.'!');
    }


}