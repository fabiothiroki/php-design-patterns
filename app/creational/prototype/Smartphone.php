<?php

declare(strict_types=1);

namespace app\creational\prototype;

final class Smartphone extends ProductPrototype
{
    public function __construct()
    {
        $this->id = 1;
        $this->name = 'Smartphone';
    }
}
