<?php

declare(strict_types=1);

namespace structural\adapter;

use app\structural\adapter\ThirdPartyEmailAdapter;
use app\structural\adapter\ThirdPartyEmailClient;
use PHPUnit\Framework\TestCase;

final class AdapterTest extends TestCase
{
    public function testAwsAdapterUsesCorrectClient(): void
    {
        $awsClient = $this->createMock(ThirdPartyEmailClient::class);

        $emailAdapter = new ThirdPartyEmailAdapter($awsClient);

        $awsClient->expects($this->once())
            ->method('sendEmail');

        $emailAdapter->sendEmail(
            'I love design patterns',
            'email@emal.com');
    }
}