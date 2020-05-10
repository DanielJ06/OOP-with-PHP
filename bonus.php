<?php

require './autoload.php';

use Alura\Bank\Model\CPF;
use Alura\Bank\Controller\BonusCalculator;
use Alura\Bank\Model\Employee\{Manager, Developer};

$employee1 = new Manager(
    'Daniel', 
    new CPF('123.456.789-10'), 
    'Manager', 
    3000
);

$employee2 = new Developer(
    'Dan Rodrigues', 
    new CPF('321.654.987-10'), 
    'Developer',
    1000
);
$employee2->promoted();

$controller = new BonusCalculator();
$controller->addBonus($employee1);
$controller->addBonus($employee2);

echo $controller->getTotal();