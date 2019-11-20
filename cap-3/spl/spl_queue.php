<?php
$ingredientes = new SplQueue();

//acrescentando na file
$ingredientes->enqueue('Peixe');
$ingredientes->enqueue('Sal');
$ingredientes->enqueue('Limão');

foreach ($ingredientes as $item) {
    print "Item: $item \n";
}

print PHP_EOL;

//removendo da file
print "{$ingredientes->dequeue()} \n";
print "Count: {$ingredientes->count()} \n";

print "{$ingredientes->dequeue()} \n";
print "Count: {$ingredientes->count()} \n";

print "{$ingredientes->dequeue()} \n";
print "Count: {$ingredientes->count()} \n";
