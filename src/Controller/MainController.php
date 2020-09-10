<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/hello/{name?}", name="hello")
     * @param Request $request
     */
    public function test(Request $request){
        $name = $request->get("name");
        return $this->render("home/hello.html.twig",[
            "name" => $name,
        ]);
    }
}
