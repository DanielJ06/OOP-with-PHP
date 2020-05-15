<?php

namespace Alura\Bank\Controller;

use Alura\Bank\Model\Authenticate;

class Authenticator {
    public function tryLogin(Authenticate $authenticate, string $passwd): void {
        if ($authenticate->authorized(md5($passwd))) {
            echo "Logged";
        } else {
            echo "Incorrect password";
        }
    }
}