# PSR

A PSR (PHP Standard Recommendation) é uma recomendação de padrões de escrita de código em PHP que envolve áreas como carregamento de classes, estruturação de Namespaces, padrões de nomenclatura e estilo, entre outros tópicos que objetivam facilitar a interperabilidade entre diferentes projetos PHP.

A PSR é mantida pela FIG (Framework Interoperability Group) que tenta encontrar pontos em comum entre diversos frameworks e criar uma abordagem única para estruturação e escrita de código para facilitar a interoperabilidade.

A PSR é dividida em níveis (PSR-0, PSR-1, PSR-2, etc), e cada nível propõe um conjunto de práticas. Um nível pode referenciar o outro. Por exemplo, ao aplicar a PSR-2, deve-se seguir a PSR-1

Pontos mais importantes propostos pela PSR:
- Usar Namespaces
- Os Namespaces devem iniciar com a identificação do fornecedor (ex: \<Fornecedor>\<Subnível>\<Classe>)
- Namespaces podem ter vários subníveis
- A parte inicial do namespace será o diretório-base das classes que serão carregadas, seus subníveis serão sub-diretórios
- A classe deve possuir o mesmo nome do arquivo acrescido pelo sufixo .php
- Os arquivos devem ser em UTF-8
- As classes devem ser representadas no formato StudlyCaps (ex. FormField)
- Os metódos no formato Camel Case (ex. addOptionField)
- Deve possuir uma linha em branco entre Namespace e Use
- Namespaces e classes devem seguir um autoloader-padrão