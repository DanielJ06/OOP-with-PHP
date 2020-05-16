<?php

require_once 'autoload.php';

use Alura\Bank\Model\Account\{Holder, CheckingAccount, Savings};
use Alura\Bank\Model\{CPF, Address};

$address = new Address('City', 'Some district', 'Some street', '4a');
$holder1 = new Holder(new CPF('123.456.789-10'), 'Daniel de Jesus', $address);
$holder2 = new Holder(new CPF('321.654.987-01'), 'Dan Rodrigues', $address);

$firstAccount = new CheckingAccount($holder1);
$secondAccount = new Savings($holder2);

$firstAccount->deposit(10000);
$firstAccount->withdraw(5);
$firstAccount->transfer(200, $secondAccount);

echo $secondAccount->getBalance() . PHP_EOL;

echo $address->number = '3b';