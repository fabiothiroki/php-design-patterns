<?php

declare(strict_types=1);

namespace creational\prototype;

abstract class ProductPrototype
{
    protected int $id;
    protected string $name;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
