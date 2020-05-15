<?php

namespace Alura\Bank\Model\Employee;

class Manager extends Employee {
    public function bonusCalc(): float {
        return $this->getSalary() * 2;
    }

    public function authorized(string $passwd): bool {
        return $passwd === md5('a');
    }
}