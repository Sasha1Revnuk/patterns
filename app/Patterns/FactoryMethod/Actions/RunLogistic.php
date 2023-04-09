<?php

namespace App\Patterns\FactoryMethod\Actions;

use App\Patterns\FactoryMethod\Abstracts\Logistic;

class RunLogistic
{
    public function __invoke(Logistic $logistic, string $cargo):array
    {
        return $logistic->deliverCargo($cargo);

    }
}
