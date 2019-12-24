<?php
require_once 'Record.php';
require_once 'trait2.php';

class Pessoa extends Record {
    const TABLENAME = 'pessoas';
    use ObjectConversionTrait;
}

class Fornecedor extends Record {
    const TABLENAME = 'fornecedores';
}

class Produto extends Record {
    const TABLENAME = 'produtos';
    use ObjectConversionTrait {
        toJSON as exportToJSON;
    }
}

$p = new Pessoa;
$p->load(1);
print PHP_EOL;
$p->nome = 'Maria da Silva';
$p->endereco = 'Rua das flores';
$p->numero = '123';
$p->save();
print PHP_EOL;

print '-- To XML --' . PHP_EOL;
print $p->toXML();
print PHP_EOL . '-- To JSON --' . PHP_EOL;
print $p->toJSON();
print PHP_EOL;

$p->delete(3);
print PHP_EOL;

$p2 = new Produto;
$p2->descricao = 'Chocolate';
$p2->preco = 7;
print $p2->exportToJSON();