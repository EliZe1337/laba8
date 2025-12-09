<?php

namespace user\laba8\Exception;

use Exception;

class InsufficientFundsException extends Exception
{
    public function __construct(string $message = "нет  денег.")
    {
        parent::__construct($message);
    }
}

