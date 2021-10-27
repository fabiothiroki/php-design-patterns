<?php

declare(strict_types=1);

namespace app\structural\adapter;

class FakeAwsSesClient
{
    public function __construct(
        private string $apiKey,
        private string $region,
    ) {
    }

    public function sendEmail(
        string $subject,
        string $recipient,
        string $content,
    ): void {
        echo sprintf("Using apiKey %s and region %s", $this->apiKey, $this->region);
        echo sprintf("Sending email to %s with subject %s and content %s", $subject, $recipient, $content);
    }
}