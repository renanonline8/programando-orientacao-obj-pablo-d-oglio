# Capitulo 4: Persistência - Introdução

Um programa orientado a objetos é formado por um conjunto de objetos relacionados. A persistência é a parte importante de um programa. Persistência consiste em uma forma de armazenar informação permanente, que não encerre ao finalizar o programa, através de um meio externo.

Banco de dados relacionais são maneiras de persistir dados, mas este tipo de banco nasceu na era procedural, então são pensados de forma procedural. Então foi arquitetado tecinicas de mapeamento objeto-relacional para facilitar essa comunicação entre aplicação orientada a objeto e banco de dados relacional.

A manipulação dos dados em um banco relacional, na maioria das vezes, é realizada através da linguagem SQL. O uso incorreto dessa linguagem causam muitos problemas de desempenho e manutenibilidade de uma aplicação. Por isso, recomenda-se criar separar o SQL do domínio do negócio, distribuindo entre várias partes da aplicação e constituindo uma camada de acesso aos dados.

Uma diferença significante entre objetos de banco de dados relacionais está na representação de relacionamentos. Objetos reabalham com ponteiros (links) entre outros objetos, já banco de dados relacionais usam chaves primárias e estrageiras para tal tarefa.

Estudaremos padrões de projeto para padronizar essa comunicação.