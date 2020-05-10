<?php

namespace Alura\Bank\Model\Employee;

class Manager extends Employee {
    public function bonusCalc(): float {
        return $this->getSalary() * 2;
    }

    public function Auth(string $passwd) {
        return $passwd = 'a';
    }
}