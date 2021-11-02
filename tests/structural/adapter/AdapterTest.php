<?php

declare(strict_types=1);

namespace structural\adapter;

use app\structural\adapter\ThirdPartyEmailSenderAdapter;
use app\structural\adapter\ThirdPartyEmailClient;
use PHPUnit\Framework\TestCase;

final class AdapterTest extends TestCase
{
    public function testThirdPartyEmailSenderAdapterAdapterUsesCorrectClient(): void
    {
        $emailClient = $this->createMock(ThirdPartyEmailClient::class);

        $emailAdapter = new ThirdPartyEmailSenderAdapter($emailClient);

        $emailClient->expects($this->once())
            ->method('sendEmail')
            ->with('email@email.com', 'I love design patterns');

        $emailAdapter->sendEmail(
            'email@email.com',
            'I love design patterns');
    }

    public function testThirdPartyClient(): void
    {
        $emailClient = new ThirdPartyEmailClient('apiKey', 'region');
        $emailClient->sendEmail('email@email.com', 'I love design patterns');

        $this->expectOutputRegex('/Using apiKey apiKey and region region/');
        $this->expectOutputRegex('/Sending email to email@email.com and content I love design patterns/');
    }
}