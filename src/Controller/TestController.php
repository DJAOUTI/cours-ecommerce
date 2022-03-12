<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    // Injection de dépendance pour le service Taxes-> Calculator
    protected $calculator;
    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    // Méthode index
    public function index()
    {
        $tva = $this->calculator->calcul(2500);
        dump($tva);
        dd("Ca fonctionne !"); //On peut remplacer var-dump() par juste le mot dump (une fonction prè-définie)
        //die(); On peut remplacer le dump et le die par juste le mot dd (dump and die)
    }
    //Méthode Test
    public function test(Request $request)
    {

        // $request = Request::createFromGlobals();
        $age = $request->attributes->get('age');
        return new Response("Bonjour, j'ai $age ans");
    }
}
