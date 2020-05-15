<?php

namespace Alura\Bank\Model;

interface Authenticate {
    public function authorized(string $passwd): bool;
}