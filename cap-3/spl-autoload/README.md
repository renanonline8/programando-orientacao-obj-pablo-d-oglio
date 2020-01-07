# SPL Autoload

A spl_autoload_register() é uma função que permite registrar vários métodos que o PHP irá colocar em uma fila e executar quando uma classe for requisitada e ainda não estiver carregada na aplicação. O uso da __autoload() não é mais recomendado.

A função spl_autoload_register() aceita um parâmetro do tipo Callable, que pode ser um método de objeto, uma função indentificada ou também uma função anônima.

No exemplo do arquivo [spl_autoload1.php](spl_autoload1.php), quando o programa chega na classe Veiculo para ser instanciada, se a classe não carregada, ela chamara a função spl_autoload_register que permitirá fazer a requisição da classe.