<?php
class Titulo 
{
    private $data;

    public function __toString()
    {
        return "Retorna uma string \n";
    }
}

$titulo = new Titulo;
print $titulo;