<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    protected $calculator;
    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }
    // // Appeler le service LoggerInterface
    // protected $logger;
    // public function __construct(LoggerInterface $logger)
    // {
    //     $this->logger = $logger;
    // }
    public function hello($prenom)
    {
        // Quand tu appel le hello controller tu fait un calcule du Tva avec une valeure donnée.
        $tva = $this->calculator->calcul(100);
        dump($tva);
        // $this->logger->error("Mon mesage de log !");
        // $request = Request::createFromGlobals();
        // $prenom = $request->attributes->get("prenom");
        return new Response("Hello $prenom");
    }
}
