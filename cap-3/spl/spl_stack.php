<?php
$ingredientes = new SplStack();

//Acrescentando na pilha
$ingredientes->push('Peixe');
$ingredientes->push('Sal');
$ingredientes->push('Limão');

foreach ($ingredientes as $item) {
    print 'Item: ' . $item . PHP_EOL;
}

print PHP_EOL;

//Removendo da pilha
print $ingredientes->pop() . PHP_EOL;
print $ingredientes->count() . PHP_EOL;

print $ingredientes->pop() . PHP_EOL;
print $ingredientes->count() . PHP_EOL;

print $ingredientes->pop() . PHP_EOL;
print $ingredientes->count() . PHP_EOL;
