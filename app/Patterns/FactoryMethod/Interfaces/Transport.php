<?php

namespace App\Patterns\FactoryMethod\Interfaces;

interface Transport
{
    public function load(): string;
    public function deliver(string $cargo): string;
    public function unload(): string;
}
