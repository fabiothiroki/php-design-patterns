<?php

declare(strict_types=1);

namespace creational\prototype;

final class Laptop extends ProductPrototype
{
    public function __construct()
    {
        $this->id = 2;
        $this->name = 'Smartphone';
    }
}
