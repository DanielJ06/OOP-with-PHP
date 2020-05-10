<?php

namespace Alura\Bank\Model\Employee;

use Alura\Bank\Model\{User, CPF};

abstract class Employee extends User {
    private $jobRole;
    private $salary;

    public function __construct(string $name, CPF $cpf, string $jobRole, float $salary) {
        parent::__construct($name, $cpf);
        $this->jobRole = $jobRole; 
        $this->salary = $salary;
    }

    public function getRole() {
        return $this->jobRole;
    }
    
    public function getSalary() {
        return $this->salary;
    }

    public function setName(string $name) {
        $this->validateName($name);
        $this->name = $name;
    }

    public function bonusCalc(): float {
        return $this->salary * 0.1;
    }

    public function promotion(float $value) {
        if($value < 0) {
            echo "Invalid promotion value";
            return;
        }

        $this->salary += $value;
    }
}