<?php

declare(strict_types=1);

namespace app\structural\adapter;

interface EmailSenderAdapter
{
    public function sendEmail(string $subject, string $recipient, string $content): void;
}
