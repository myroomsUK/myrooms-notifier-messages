<?php

namespace Myrooms\Messages\Notifier;

class SlackMessage
{
    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $channel;

    public function __construct(string $message, string $channel)
    {
        $this->message = $message;
        $this->channel = $channel;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getChannel(): string
    {
        return $this->channel;
    }
}