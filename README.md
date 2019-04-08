# WebCrawlerTCC
Web Crawler que busca produtos em sites de hardware e verifica o menor preço entre elas.

Ainda está em fase inicial de desenvolvimento. Tem como objetivo extrair informações de diversos sites e mostrar ao usuário todos eles
e observar o menor preço. O projeto não tem como objetivo baixar e guardar as informações em um banco de dados, somente a execução da
busca dos produtos. Caso o usuário queira o produto, ele adiciona em sua lista de desejos (que este sim será guardado no banco de dados)
e/ou será redirecionado ao site onde o produto está sendo vendido mais barato ou da preferência do usuário.

Selecione a opção do meio da página principal para ir na página de busca de produtos, é lá onde está sendo feito testes de crawler. Dependendo da internet, o crawler demora um pouco para pegar as informações e construir o corpo de resultado na tela. Somente funciona buscar por "Processador" e "Placa de Video". 

As pesquisas são feitas em tempo real, sem redirecionamento e, observando a busca pelos produtos específicos citados anteriormente, funciona muito bem. O problema é que em alguns sites o crawler é bloqueado de fazer requisições de dados, chamado CORS. 

O projeto será um site, onde pode ser hospedado em um site para todos utilizarem, mas como é para TCC, então terá período de funcionamento em curto prazo. O projeto atualmente é uma mistura de HTML, CSS, JS, JQuery e Node.js.
