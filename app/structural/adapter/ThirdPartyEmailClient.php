<?php

declare(strict_types=1);

namespace app\structural\adapter;

class ThirdPartyEmailClient
{
    public function __construct(
        private string $apiKey,
        private string $region,
    ) {
    }

    public function sendEmail(
        string $recipient,
        string $content,
    ): void {
        echo sprintf("Using apiKey %s and region %s", $this->apiKey, $this->region);
        echo sprintf("Sending email to %s and content %s", $recipient, $content);
    }
}
