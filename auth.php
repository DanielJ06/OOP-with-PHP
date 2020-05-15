<?php

use Alura\Bank\Controller\Authenticator;
use Alura\Bank\Model\CPF;
use Alura\Bank\Model\Employee\Manager;

require_once './autoload.php';

$auth = new Authenticator();

$manager1 = new Manager(
    'Dan de Jesus',
    new CPF('123.456.798-10'),
    7500
);

$auth->tryLogin($manager1, 'a');