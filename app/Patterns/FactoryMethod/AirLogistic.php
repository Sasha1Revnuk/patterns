<?php

namespace App\Patterns\FactoryMethod;

use App\Patterns\FactoryMethod\Interfaces\Transport;

class AirLogistic extends Abstracts\Logistic
{

    public function getTransport(): Transport
    {
        return new Plain();
    }
}
