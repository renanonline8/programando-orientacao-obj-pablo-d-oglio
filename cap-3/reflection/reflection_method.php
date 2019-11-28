<?php
require_once 'veiculo.php';
$rm = new ReflectionMethod('Automovel', 'setPlaca');
print $rm->getName() . PHP_EOL;

print $rm->isPrivate() ? 'É privado' : 'Não é privado';
print PHP_EOL;

print $rm->isStatic() ? 'É estático' : 'Não é estático';
print PHP_EOL;

print $rm->isFinal() ? 'É final' : 'Não é final';
print PHP_EOL;

print_r($rm->getParameters());