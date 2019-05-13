<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HelloWorldController
 * @package App\Controller
 */

class HelloWorldController extends AbstractController {

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

//    /**
//     * Index action
//     * @param string $name User input
//     * @return Response
//     * @Route(
//     *     "/{name}",
//     *     defaults={"name" : "World"},
//     *     requirements={"name" : "[a-zA-Z]+"},
//     * )
//     */
//
//    public function index(string $name): Response {
//        return new Response('Hello '.$name.'!');
//    }

    /**
     * Index action
     * @param string $name User input
     * @return Response
     * @Route(
     *     "/hello/{name}",
     *     defaults={"name" : "World"},
     *     requirements={"name" : "[a-zA-Z]+"},
     * )
     */

    public function index(string $name): Response
    {
        return $this->render('hello-world/index.html.twig', [ 'name' => $name]);
    }

}