<?php

namespace App\Taxes;

class Detector
{
    // On fait construire le seuil de la TVA
    protected $seuil;
    public function __construct($seuil)
    {
        $this->seuil = $seuil;
    }

    public function detect(int $amount): bool
    {
        if ($amount > $this->seuil) {
            return true;
        }
        return false;
    }
}
