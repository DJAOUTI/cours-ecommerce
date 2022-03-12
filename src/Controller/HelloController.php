<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /**
     * @Route("/hello/{prenom?world}", name="hello")
     */
    public function hello($prenom)
    {
        $tva = $this->calculator->calcul(100);
        dump($tva);
        // $request = Request::createFromGlobals();
        // $prenom = $request->attributes->get("prenom");
        return new Response("Hello $prenom");
    }
}
