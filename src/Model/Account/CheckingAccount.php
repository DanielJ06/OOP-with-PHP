<?php

namespace Alura\Bank\Model\Account;

class CheckingAccount extends Account {
    public function Fee(): float {
        return 0.05;
    }

    public function transfer(float $value, Account $destiny): void {
        if ($value > $this->balance) {
            echo "Invalid value";
            return;
        }
        $this->withdraw($value);
        $destiny->deposit($value);
    }
}