<?php

namespace Alura\Bank\Model\Account;

abstract class Account {
    private $holder;
    protected $balance;
    private static $NumberOfAccounts = 0;

    public function __construct(Holder $holder) {
        $this->holder = $holder;
        $this->balance = 0;

        self::$NumberOfAccounts++;
    }

    public function __destruct() {
        self::$NumberOfAccounts--;
    }

    public function withdraw(float $value): void {
        $withdrawalFee = $value * $this->Fee();
        $finalValue = $value + $withdrawalFee;
        if($finalValue > $this->balance) {
            echo "Invalid value";
            exit();
        }
        $this->balance -= $finalValue;
    }

    public function deposit(float $value): void {
        if ($value < 0) {
            echo "Invalid value";
            return;
        }

        $this->balance += $value;
    }

    abstract public function Fee(): float;

    public function getBalance(): string {
        return $this->balance;
    }

    public function getHolderName(): string {
        return $this->holder->getName();
    }

    public function getCPFHolder(): string {
        return $this->holder->getCPF();
    }

    public function getAccountNumber(): int {
        return self::$NumberOfAccounts;
    }
}