<?php
class Produto
{
    private $nome;
    private $qtd;
    private $total;

    public function __construct($nome, $qtd, $total)
    {
        $this->nome = $nome;
        $this->qtd = $qtd;
        $this->total = $total;
    }
}