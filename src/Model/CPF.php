<?php

namespace Alura\Bank\Model;

class CPF {
    private $number;

    public function __construct(string $num) {
        $num = filter_var($num, FILTER_VALIDATE_REGEXP, [
            "options" => [
                "regexp" => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if(!$num) {
            echo "Invalid CPF";
            exit();
        }

        $this->number = $num;
    }

    public function getNumber(): string {
        return $this->number;
    }
}