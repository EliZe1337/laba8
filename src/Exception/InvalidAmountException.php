<?php

namespace user\laba8\Exception;
use Exception;

class InvalidAmountException extends Exception
{
    public function __construct(string $message = "недопустимвя сумма")
    {
        parent::__construct($message);
    }
}

