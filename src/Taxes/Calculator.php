<?php

namespace App\Taxes;

use Psr\Log\LoggerInterface;

class Calculator
{
    protected $logger;
    protected $tva;
    public function __construct(LoggerInterface $logger, float $tva)
    {
        $this->logger = $logger;
        $this->tva = $tva;
    }

    public function calcul(float $prix): float
    {
        // Tva est à 20% dan cet exemple
        return $prix * (19 / 100);
    }
}
