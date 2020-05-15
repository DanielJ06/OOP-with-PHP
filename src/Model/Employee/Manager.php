<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\Authenticate;

class Manager extends Employee implements Authenticate {
    public function bonusCalc(): float {
        return $this->getSalary() * 2;
    }

    public function authorized(string $passwd): bool {
        return $passwd === md5('a');
    }
}