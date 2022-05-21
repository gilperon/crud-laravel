


<h1>Tutorial para rodar o teste CRUD em Laravel</h1>

1) Clonar esse repositorio:<br>
   git clone https://github.com/gilperon/crud-laravel.git
   
2) Vá para a pasta do diretorio<br>
   cd crud-laravel
   
3) Instale as dependencidas com o composer <br>
   composer install

4) Copie o arquivo .env.example para .env ou simplesmente renomeie ele<br>
   Se estiver no linux digite isso no terminal: cp .env.example .env <br>
   Se estiver no windows digite isso no terminal: copy .env.example .env

5) Execute o comando abaixo, para criar uma chave para a aplicação<br>
   php artisan key:generate

6) Execute o comtando abaixo, para criar a tabela cliente no banco de dados<br>
   php artisan migrate

7) Rode o servidor<br>
   php artisan serve

8) Acesse em seu navegador seu diretorio localhost para ter acesso a Criar, Listar, Deletar e Buscar clientes
   localhost/crud-laravel/public/

Voce deve ver uma index com os links para os endpoints igual a essa: https://i.imgur.com/K6QweUm.png <br>
Agora, é só seguir os links e ver as funcionalidades.

;)




