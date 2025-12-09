<?php

require_once(__DIR__ . '/vendor/autoload.php');

use vboxuser\laba8\BankAccount;
use vboxuser\laba8\Exceptions\InvalidAmountException;
use vboxuser\laba8\Exceptions\InsufficientFundsException;

try {
    $balance = (float) readline("добавьте денег: ");
    $account = new BankAccount($balance);

    echo "Баланс: " . $account->getBalance() . "\n";

    $depositAmount = (float) readline("Введите сумму депозита: ");
    $account->deposit($depositAmount);

    echo "Баланс после депозита: " . $account->getBalance() . "\n";

    $withdrawAmount = (float) readline("Введите сумму вывода: ");
    $account->withdraw($withdrawAmount);

    echo "Баланс после вывода: " . $account->getBalance() . "\n";

} catch (InvalidAmountException $e) {
    echo "Ошибка: " . $e->getMessage() . "\n";

} catch (InsufficientFundsException $e) {
    echo "Ошибка: " . $e->getMessage() . "\n";

} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage() . "\n";
}
