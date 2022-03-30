<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HelloController
{

    /**
     * @Route("/hello/{prenom?world}", name="hello")
     */
    public function hello($prenom, Environment $twig)
    {
        $html = $twig->render('hello.html.twig', [
            'prenom' => $prenom,
            'age' => 12
        ]);

        return new Response($html);
    }
}
