<?php

namespace Alura\Bank\Controller;

use Alura\Bank\Model\Employee\Employee;

class BonusCalculator {
    private $bonusTotal;

    public function addBonus(Employee $employee) {
        $this->bonusTotal += $employee->bonusCalc();
    }

    public function getTotal(): float {
        return $this->bonusTotal;
    }
}