<?php
spl_autoload_register( function ($class) {
    if (file_exists(__DIR__ . "/App/{$class}.php")) {
        require_once __DIR__ . "/App/{$class}.php";
        return TRUE;
    }
});

var_dump(new Veiculo);