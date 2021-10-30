<?php

declare(strict_types=1);

namespace app\structural\adapter;

interface EmailAdapter
{
    public function sendEmail(string $recipient, string $content): void;
}
