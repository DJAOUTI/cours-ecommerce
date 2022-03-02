<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    protected $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function hello($prenom)
    {
        $this->logger->error("Messge d'erreure");
        // $request = Request::createFromGlobals();
        // $prenom = $request->attributes->get("prenom");
        return new Response("Hello $prenom");
    }
}
