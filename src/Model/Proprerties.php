<?php

namespace Alura\Bank\Model;

trait Proprerties {
    public function __get($name): void {
        $method = 'get' . ucfirst($name);
        $this->$method();
    }

    public function __set($name, $value): void {
        $method = 'set' . ucfirst($name);
        $this->$method($value);
    }
}