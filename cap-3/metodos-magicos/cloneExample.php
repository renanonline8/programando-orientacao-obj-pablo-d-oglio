<?php
class Produto
{
    private $codigo;
    private $nome;

    public function __construct(Int $codigo, String $nome)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
    }

    public function __clone()
    {
        $this->codigo = 0;
    }

    public function __toString()
    {
        return "O Código é '{$this->codigo}' e o nome é '{$this->nome}' \n";
    }
}

$produto1 = new Produto(1, 'Notebook');
print 'Produto 1: ' . $produto1;

$produto2 = clone $produto1; 
print 'Produto 2: ' . $produto2;