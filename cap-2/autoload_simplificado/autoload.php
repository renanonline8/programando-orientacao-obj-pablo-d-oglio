<?php
function __autoload($classe) {
    //busca classe no diretório de classes...
    require_once "classes/{$classe}.php";
}

$cafe = new Produto('Máquina de café', 10, 299);
var_dump($cafe);