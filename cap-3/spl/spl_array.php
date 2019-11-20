<?php
$dados = ['salmão', 'tilápia', 'sardinha', 'badejo', 'pescada',
          'dourado', 'corvina', 'cavala', 'bagre'];
$objarray = new ArrayObject($dados);

//acrescenta
$objarray->append('bacalhau');

//obtém posição 2
print 'Posição 2: ' . $objarray->offsetGet(2) . PHP_EOL;

//substituir posição 2
$objarray->offsetSet(2, 'linguado');

// elimina posição 4
$objarray->offsetUnset(4);

// testa se posição existe
if ($objarray->offsetExists(10)) {
    print 'Posição 10 encontrada' . PHP_EOL;
} else {
    print 'Posição 10 não encontrada' . PHP_EOL;
}

print 'Total: ' . $objarray->count() . PHP_EOL;

$objarray[] = 'atum'; //acrescenta
$objarray->natsort(); //ordena

//percorre dados
print PHP_EOL;
foreach ($objarray as $item) {
    print 'Item: ' . $item . PHP_EOL;
}
print $objarray->serialize();
