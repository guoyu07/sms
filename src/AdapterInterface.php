<?php

namespace Medz\Sms;

interface AdapterInterface
{
    /**
     * Send message.
     *
     * @param string|float|int $to
     * @param [type] $message
     * @return mixed
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function send($to, $message);
}
