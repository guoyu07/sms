<?php

namespace Medz\Sms;

interface SmsInterface
{
    public function send($to, $message, array $config = []);
}
