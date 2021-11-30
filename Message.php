<?php

namespace Myrooms\Messages\Notifier;

class Message implements NotifierMessage
{
    const TYPE_INFO = 0;
    const TYPE_ERROR = 1;
    const TYPE_CRITICAL = 2;

    /**
     * @var string
     */
    private $message;

    /**
     * @var int
     */
    private $type = self::TYPE_INFO;

    private function __construct(string $message, int $type)
    {
        $this->message = $message;
        $this->type = $type;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public static function info(string $message): self
    {
        return new self($message, self::TYPE_INFO);
    }

    public static function error(string $message): self
    {
        return new self($message, self::TYPE_ERROR);
    }

    public static function critical(string $message): self
    {
        return new self($message, self::TYPE_CRITICAL);
    }
}