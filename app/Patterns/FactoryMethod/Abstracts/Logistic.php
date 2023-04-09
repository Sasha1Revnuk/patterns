<?php

namespace App\Patterns\FactoryMethod\Abstracts;

use App\Patterns\FactoryMethod\Interfaces\Transport;

use function Symfony\Component\Translation\t;

abstract class Logistic
{
    abstract public function getTransport(): Transport;

    public function deliverCargo(string $cargoName): array
    {
        $transport = $this->getTransport();
        return [
            'load' => $transport->load(),
            'deliver' => $transport->deliver($cargoName),
            'unload' => $transport->unload()
        ];
    }
}
