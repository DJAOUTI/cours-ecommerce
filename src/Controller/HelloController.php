<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Cocur\Slugify\Slugify;
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

    public function hello($prenom, Slugify $slugify)
    {
        // $slugify = new Slugify();
        dump($slugify->slugify("Hello World"));
        // Quand tu appel le hello controller tu fait un calcule du Tva avec une valeure donnée.
        $tva = $this->calculator->calcul(100);
        dump($tva);

        return new Response("Hello $prenom");
    }
}
