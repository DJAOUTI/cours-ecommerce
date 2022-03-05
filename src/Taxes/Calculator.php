<?php

namespace App\Taxes;

class Calculator
{

    public function calcul(float $prix): float
    {
        // Tva est à 20% dan cet exemple
        return $prix * (20 / 100);
    }
}
