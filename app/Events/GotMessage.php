<?php

namespace App\Events;

/**
 * Class SentMessage
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $message
 * @package App\Events\States
 */
class GotMessage
{
    public $name;
    public $phone;
    public $email;
    public $message;

    public function __construct(string $name, string $phone, string $email, string $message)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->message = $message;
    }
}
