<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    public function testOutputMessage()
    {
        require_once 'app/index.php';

        $this->expectOutputString('Hello world!');
    }
}
