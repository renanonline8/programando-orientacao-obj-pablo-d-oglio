# Gateways

Um Gateway é uma interface que se comunica com um recurso externo escondendo seus detalhes. Assim a aplicação só precisará conhecer essas interfaces para manipular as informações. 

O acesso a linguagem SQL fica nessa camada, desta forma evitamos manipular dados de forma espalhada pela a aplicação.

## Table Data Gateway

O objetivo deste Design Pattern é oferecer uma interface de comunicação com o banco de dados que permite operações de inserção, alteração, exclusão e busca de registros.

Consiste em criar uma classe para manipulação de cada tabela do banco de dados, e apenas uma instância dessa classe irá manipular todos os registros da tabela, por isso é necessário sempre identificar o registro sobre o qual o método estará operando. Ésta classe é stateless, servido apenas como ponte entre o objeto de negócio e o banco de dados.

![Table Data Gateway](assets/table-data-gateway.png)



