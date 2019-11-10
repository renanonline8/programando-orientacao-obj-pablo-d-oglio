<?php
class Titulo {
    private $dt_vencimento, $juros, $multa;

    public function __set($propriedade, $valor)
    {
        print "Você tentou atribuir a propriedade '$propriedade' o valor '$valor', mas é um atributo inacessível";
    }
}

$titulo = new Titulo();
$titulo->valor = 5;