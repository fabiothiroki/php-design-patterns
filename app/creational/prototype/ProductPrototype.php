<?php

declare(strict_types=1);

namespace app\creational\prototype;

abstract class ProductPrototype
{
    protected int $id;
    protected string $name;
    protected string $color;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}
