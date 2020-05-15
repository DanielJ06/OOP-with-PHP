<?php

namespace Alura\Bank\Controller;

use Alura\Bank\Model\Employee\Manager;

class Authenticator {
    public function tryLogin(Manager $manager, string $passwd): void {
        if ($manager->authorized(md5($passwd))) {
            echo "Logged";
        } else {
            echo "Incorrect password";
        }
    }
}