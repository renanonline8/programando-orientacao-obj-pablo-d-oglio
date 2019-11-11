<?php
function __autoload($classe) {
    //busca classe no diretório de classes...
    require_once "classes/{$classe}.php";
}

class Produto extends ObjectData {}

$produto = new Produto;
$produto->nome = 'Máquina de lavar pratos';
$produto->descricao = 'Serve para lavar pratos';
$produto->valor = 1999;

print "Nome do produto: {$produto->nome}\n";

print 'A propriedade valor existe? ' . (isset($produto->valor) ? 'Sim' : 'Não') . "\n";
print 'A propriedade quantidade existe? ' . (isset($produto->quantidade) ? 'Sim' : 'Não') . " \n";

unset($produto->valor);
print 'A propriedade valor existe? ' . (isset($produto->valor) ? "Sim" : "Não") . " \n";