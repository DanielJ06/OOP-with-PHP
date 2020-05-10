<?php

namespace Alura\Bank\Model;

class User {
    protected $name;
    private $cpf;

    public function __construct(string $name, CPF $cpf) {
        $this->validateName($name);
        $this->name = $name;
        $this->cpf = $cpf;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getCPF(): string {
        return $this->cpf->getNumber();
    }

    public function validateName(string $name) {
        if(strlen($name) < 5) {
            echo "Invalid name";
            exit();
        }
    }
}