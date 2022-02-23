<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    // Méthode index
    public function index()
    {
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