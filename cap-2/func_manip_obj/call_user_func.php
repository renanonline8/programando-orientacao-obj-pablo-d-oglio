<?php
function apresenta($nome) {
    echo "Olá senhor {$nome}!\n";
}

//executar a função
call_user_func('apresenta', 'Pablo');

// declaração de classe
class Pessoa {
    public static function apresenta($nome) {
        echo "Olá senhor {$nome}!\n";
    }
}

//chamada de método estático
call_user_func(array('Pessoa', 'apresenta'), 'Pablo');

//chamada de método de objeto
$obj = new Pessoa;
call_user_func(array($obj, 'apresenta'), 'Pablo');