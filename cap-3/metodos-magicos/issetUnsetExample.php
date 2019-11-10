<?php
class Titulo
{
    private $data;

    public function __isset($propriedade) {
        print "A propriedade '$propriedade' não pode executar isset \n";
    }
    
    public function __unset($propriedade) {
        print "A propriedade '$propriedade' não pode executar unset \n";
    }
}

$titulo = new Titulo;
isset($titulo->nome);
unset($titulo->nome);