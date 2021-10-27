<?php

declare(strict_types=1);

namespace app\structural\adapter;

final class AwsSesAdapter implements EmailSenderAdapter
{
    public function __construct(private FakeAwsSesClient $awsSesClient)
    {
    }

    public function sendEmail(string $subject, string $recipient, string $content): void
    {
        $this->awsSesClient->sendEmail($subject, $recipient, $content);
    }
}
