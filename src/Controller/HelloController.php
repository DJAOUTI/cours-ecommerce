<?php

namespace App\Controller;


use App\Taxes\Calculator;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Log\Logger;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{


    protected $calculator;
    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @Route("/hello/{prenom?world}", name="hello")
     */
    public function hello($prenom, Slugify $slugify)
    {

        $slugify = $slugify->Slugify("Hello World");
        dump($slugify);

        $tva = $this->calculator->calcul(100);
        dump($tva);
        // $this->logger->error("Mon message de Log");
        // $request = Request::createFromGlobals();
        // $prenom = $request->attributes->get("prenom");
        return new Response("Hello $prenom");
    }
}
