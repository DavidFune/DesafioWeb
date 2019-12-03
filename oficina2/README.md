
“Olá, temos uma oficina mecânica e diariamente recebemos diversos pedidos de orçamento por telefone e veículos que chegam até nosso estabelecimento, contudo como fazemos por meio de papel, estamos perdendo diversas oportunidades de vendas, pois os papéis se perdem no meio da bagunça da oficina. Gostaríamos de um sistema simples, onde nossos vendedores pudessem cadastrar e consultar os orçamentos.”


Essa aplicação está dividida no padrão MVC onde o model tem como nome: Orcamento

já o controller tem como nome: OrcamentoController onde são feitas todas as

validações do sistema para que os dados sejam entrgues para views e exibidos para o usuário e todo controle de interação de telas e dados e todo a parte do crud também.

As view se localizão na pasta orcamentos dentro de views.



Para executar essa aplicação é necessário o Laravel Framework 6.6.0

Execute os comando dentro da pasta da aplicação 

Comandos:

$ composer install, 

 crie o arquivo .env com o DB_DATABASE=oficina,

 para conectar com o banco, foi usado o mysql com sistema de gerenciamento de banco de dados.

 para rodar os migrations e a seed use os comandos

 $ php artisan migrate

 $ php artisan db:seed

 Após esse comando rode

 $ php artisan serve

 e digite no browser

 http://localhost:8000/orcamento

 para abrir a pagina inicial da aplicação 

Qualquer dúvida enviar um email para

david.funy28@gmail.com

david.fune@yahoo.com.br


