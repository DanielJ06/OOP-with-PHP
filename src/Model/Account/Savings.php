<?php

namespace Alura\Bank\Model\Account;

class Savings extends Account {
    public function Fee(): float {
        return 0.05;
    }
}