<?php

namespace App\Patterns\FactoryMethod;

class Truck implements Interfaces\Transport
{

    public function load(): string
    {
        return 'The truck is loading ... <br/>';
    }

    public function deliver(string $cargo): string
    {
        return 'The truck delivering '.$cargo.' <br/>';
    }

    public function unload(): string
    {
        return 'The truck is unloaded <br/>';
    }
}
