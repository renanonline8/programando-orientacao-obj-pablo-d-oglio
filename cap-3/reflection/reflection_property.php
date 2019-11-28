<?php
require_once 'veiculo.php';
$rm = new ReflectionProperty('Automovel', 'placa');
print $rm->getName() . PHP_EOL;

print $rm->isPrivate() ? 'É privado' : 'Não é privado';
print PHP_EOL;

print $rm->isStatic() ? 'É estático' : 'Não é estático';
print PHP_EOL;