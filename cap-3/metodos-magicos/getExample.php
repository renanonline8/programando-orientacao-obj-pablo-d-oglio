<?php
class Titulo {
    private $dt_vencimento, $juros, $multa;

    public function __get($propriedade)
    {
        if ($propriedade == 'valor') {
            print "Tentou acessar '{$propriedade}' inacessível. \n";
        }
    }
}

$titulo = new Titulo();
print $titulo->valor;

