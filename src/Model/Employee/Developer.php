<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\Authenticate;

class Developer extends Employee implements Authenticate {
    public function promoted() {
     $this->promotion($this->getSalary() * 0.75);
    }

    public function bonusCalc(): float {
       return 500.0; 
    }

    public function authorized(string $passwd): bool {
        return $passwd === md5('ok');
    }
}