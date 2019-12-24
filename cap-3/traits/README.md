# Traits

"O PHP implementa o conceito de herança simples, ou seja, cada classe pode herdar características (atributos e comportamento) de apenas uma classe, não de um conjunto de classes. (…) Algumas linguagens (…) implementa o conceito de herança múltipla, que permite que uma classe possa herdar características (atributos e comportamentos) a partir de várias outras classes. (…) o PHP decidiu manter-se longe das complexidades geradas pela implantação da herança múltipla."

“Para atender à necessidade de compartilhar pequenos comportamentos entre diferente classes, independentemente da hierarquia (superclasse) foi implementado no PHP o conceito de Traits (traços). Um Trait é formado por um conjunto de métodos que representa uma funcionalidade que pode ser usada por diversas classes”

“ (…) o uso de Traits deve ser bem analisado. Ele não substitui a herança e nem deve ser utilizado como solução para todas as situações em que o reaproveitamento de código se faz necessário. (…) O uso excessivo de Traits pode fazer surgir classes compostas a partir de muitas funcionalidade, ou seja, criarem-se classes com responsabilidades diferentes, o que não é desejável, pois uma classe deve ter somente uma responsabilidade"

## Exemplo de uso
No arquivo trait1.php implmentamos alguns exemplos de Trait. No arquivo trait2.php, criamos uma Trait que possui o objetivo de exportar as propriedades de um objeto para XML ou JSON. A Trait possui dois métodos, um para exportar para XML (toXML()) outro para exportar para JSON (toJSON()).

A classe Pessoa utiliza a trait para usar os dois métodos. A classe Produto utiliza apenas o método toJSON.

Para efetuar um teste, efetue o comando: ``` php trait1.php ```