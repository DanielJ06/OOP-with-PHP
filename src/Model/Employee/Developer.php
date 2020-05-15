<?php

namespace Alura\Bank\Model\Employee;

class Developer extends Employee {
    public function promoted() {
     $this->promotion($this->getSalary() * 0.75);
    }

    public function bonusCalc(): float {
       return 500.0; 
    }
}