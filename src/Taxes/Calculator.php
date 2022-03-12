<?php

namespace App\Taxes;

use Psr\Log\LoggerInterface;

class Calculator
{
    protected $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function calcul(float $prix): float
    {
        $this->logger->info("Un calcul de la tva sur le prix : $prix");
        // Tva est à 20% dan cet exemple
        return $prix * (20 / 100);
    }
}
