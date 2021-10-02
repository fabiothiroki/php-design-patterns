<?php

declare(strict_types=1);

namespace creational\prototype;

use app\creational\prototype\Cart;
use app\creational\prototype\Laptop;
use app\creational\prototype\Smartphone;
use PHPUnit\Framework\TestCase;

final class PrototypeTest extends TestCase
{
    public function testSmartphoneClone(): void
    {
        $smartphone = new Smartphone();

        $clonedSmartphone = clone $smartphone;

        self::assertEquals($clonedSmartphone->getId(), $smartphone->getId());
        self::assertEquals($clonedSmartphone->getName(), $smartphone->getName());
        self::assertEquals($clonedSmartphone, $smartphone);
    }

    public function testCartCanAddClonedProducts(): void
    {
        $laptop = new Laptop();
        $cart = new Cart();

        $cart->addProduct($laptop);

        $clonedLaptop = clone $laptop;

        $cart->addProduct($clonedLaptop);

        self::assertCount(2, $cart->getProducts());
        self::assertEquals($cart->getProducts()[1], $cart->getProducts()[0]);
        self::assertNotSame($cart->getProducts()[1], $cart->getProducts()[0]);
    }
}

