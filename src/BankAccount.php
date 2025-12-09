<?php

namespace vboxuser\laba8;
use vboxuser\laba8\Exceptions\InvalidAmountException;
use vboxuser\laba8\Exceptions\InsufficientFundsException;

class BankAccount
{
    private float $balance;
    public function __construct(float $balance)
    {
        if ($balance < 0) {
            throw new InvalidAmountException("стартовый баланс не может быть -.");
        }

        $this->balance = $balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
    public function deposit(float $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidAmountException("положить можно только +");
        }

        $this->balance += $amount;
    }
    public function withdraw(float $amount): void
    {
        if ($amount <= 0) {
            throw new InvalidAmountException("снять можно от 1 рубля");
        }

        if ($amount > $this->balance) {
            throw new InsufficientFundsException("пытался снять {$amount} рублей, но есть только {$this->balance}");
        }

        $this->balance -= $amount;
    }
}

