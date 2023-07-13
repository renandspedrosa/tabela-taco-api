# API REST de Consulta de Dados da Tabela de Alimentos do IBGE
> Este projeto consiste em uma API REST desenvolvida em Laravel, que permite a consulta de dados da tabela de alimentos do IBGE. A tabela de alimentos do IBGE contém informações nutricionais e composição dos alimentos consumidos no Brasil.


### Funcionalidades
A API oferece as seguintes funcionalidades:

> 1. Consulta de todos os alimentos: Retorna uma lista com todos os alimentos disponíveis na tabela.

> 2. Consulta de dados de alimentos por código (em desenvolvimento): Permite buscar informações sobre um alimento específico com base no seu código identificador.

> 3. Consulta de alimentos por grupo (em desenvolvimento): Permite obter uma lista de alimentos pertencentes a um grupo específico, como cereais, frutas, legumes, etc.

> 4. Consulta de alimentos por classificação (em desenvolvimento): Permite obter uma lista de alimentos classificados de acordo com sua origem, como alimentos de origem animal, vegetal, industrializados, etc.

### Configuração e Execução
##### Para utilizar este projeto em sua máquina local, siga os passos abaixo:

<b> Pré-requisitos </b>
> Certifique-se de ter o PHP (versão 7.4 ou superior) instalado em seu sistema.

> Instale o composer em seu sistema: [Composer Installation.](https://getcomposer.org/doc/00-intro.md)

> Certifique-se de ter o Laravel instalado globalmente: [Laravel Installation.](https://laravel.com/docs/10.x)

#### Passo a Passo
Clone o repositório para sua máquina local:
~~~git
git clone https://github.com/renandspedrosa/tabela-alimentos-ibge-api.git
~~~

Acesse o diretório do projeto:
~~~git
cd tabela-alimentos-ibge-api
~~~

Instale as dependências do projeto:
~~~git
composer install
~~~

Instale as dependências do projeto:
~~~git
composer install
~~~

Configure o arquivo .env com as informações do seu ambiente local (como conexão de banco de dados).

Execute o seguinte comando para criar as tabelas e importar os dados da tabela de alimentos do IBGE:
~~~git
php artisan migrate
~~~

Inicie o servidor local para executar o projeto:
~~~git
php artisan serve
~~~

Acesse o projeto no seu navegador usando o endereço http://localhost:8000.

