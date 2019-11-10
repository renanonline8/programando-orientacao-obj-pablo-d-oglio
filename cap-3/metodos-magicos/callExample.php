<?php
class Carro
{
    public $marca, $modelo, $ano;

    public function __call($metodo, $parametros)
    {
        print "Você executou o método '$metodo', com os parametros '" . implode(', ', $parametros) . "', mas ele não existe!\n";
    }
}

$carro = new Carro();
$carro->construir('Ford', 'KA Sedan', 2019);