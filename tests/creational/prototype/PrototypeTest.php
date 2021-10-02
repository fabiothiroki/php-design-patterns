<?php

declare(strict_types=1);

namespace creational\prototype;

use app\creational\prototype\Smartphone;
use PHPUnit\Framework\TestCase;

final class PrototypeTest extends TestCase
{
    public function testSmartphoneClone(): void
    {
        $smartphone = new Smartphone();

        $clonedSmartphone = clone $smartphone;

        self::assertEquals($clonedSmartphone, $smartphone);
    }
}

