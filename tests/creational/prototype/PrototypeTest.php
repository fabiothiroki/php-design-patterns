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
        self::assertEquals($clonedSmartphone->getColor(), $smartphone->getColor());
        self::assertEquals($clonedSmartphone, $smartphone);
        self::assertNotSame($clonedSmartphone, $smartphone);
    }

    public function testCartCanAddClonedProducts(): void
    {
        $laptop = new Laptop();
        $cart = new Cart();

        $cart->addProduct($laptop);

        $clonedLaptop = clone $laptop;
        $clonedLaptop->setColor('White');
        $cart->addProduct($clonedLaptop);

        self::assertCount(2, $cart->getProducts());
        self::assertEquals($cart->getProducts()[1]->getId(), $cart->getProducts()[0]->getId());
        self::assertEquals($cart->getProducts()[1]->getName(), $cart->getProducts()[0]->getName());
        self::assertEquals('White', $cart->getProducts()[1]->getColor());
        self::assertEquals('Default color', $cart->getProducts()[0]->getColor());
    }
}

