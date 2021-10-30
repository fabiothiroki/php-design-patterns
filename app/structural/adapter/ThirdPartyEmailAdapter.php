<?php

declare(strict_types=1);

namespace app\structural\adapter;

final class ThirdPartyEmailAdapter implements EmailAdapter
{
    public function __construct(private ThirdPartyEmailClient $emailClient)
    {
    }

    public function sendEmail(string $recipient, string $content): void
    {
        $this->emailClient->sendEmail($recipient, $content);
    }
}
