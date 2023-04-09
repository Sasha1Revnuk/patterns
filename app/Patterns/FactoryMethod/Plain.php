<?php

namespace App\Patterns\FactoryMethod;

class Plain implements Interfaces\Transport
{

    public function load(): string
    {
        return 'The plain is loading ... <br/>';
    }

    public function deliver(string $cargo): string
    {
        return 'The plain delivering '.$cargo.' <br/>';
    }

    public function unload(): string
    {
        return 'The plain is unloaded <br/>';
    }
}
