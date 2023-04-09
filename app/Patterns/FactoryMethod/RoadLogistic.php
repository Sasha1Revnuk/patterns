<?php

namespace App\Patterns\FactoryMethod;

use App\Patterns\FactoryMethod\Interfaces\Transport;

class RoadLogistic extends Abstracts\Logistic
{

    public function getTransport(): Transport
    {
        return new Truck();
    }
}
