<?php

declare(strict_types=1);

namespace structural\adapter;

use app\structural\adapter\AwsSesAdapter;
use app\structural\adapter\FakeAwsSesClient;
use PHPUnit\Framework\TestCase;

final class AdapterTest extends TestCase
{
    public function testAwsAdapterUsesCorrectClient(): void
    {
        $awsClient = $this->createMock(FakeAwsSesClient::class);

        $emailAdapter = new AwsSesAdapter($awsClient);

        $awsClient->expects($this->once())
            ->method('sendEmail');

        $emailAdapter->sendEmail(
            'I love design patterns',
            'email@emal.com',
            'I really do.');
    }
}