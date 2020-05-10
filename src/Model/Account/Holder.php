<?php

namespace Alura\Bank\Model\Account;

use Alura\Bank\Model\User;
use Alura\Bank\Model\CPF;
use Alura\Bank\Model\Address;

class Holder extends User {
    private $address;

    public function __construct(CPF $cpf, string $name, Address $address) {
        parent::__construct($name, $cpf);
        $this->address = $address;
    }

    public function getAddress() {
        return $this->address;
    }
}