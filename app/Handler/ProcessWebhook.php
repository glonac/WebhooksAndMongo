<?php

namespace App\Handler;

use \Spatie\WebhookClient\ProcessWebhookJob;
use App\Http\Controllers\UserController;

class ProcessWebhook extends ProcessWebhookJob
{
    public function handle()
    {
        $webhook =new UserController();
        $webhook->createUser($this->webhookCal);
        logger($this->webhookCall);
        http_response_code(200);
    }
}
