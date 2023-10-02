<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# API de Cadastro de Funcionarios com relacionamento de tabelas 📚👨‍🎓

Este é um projeto de API desenvolvido em Laravel utilizando o Artisan. 

##

A finalidade dessa API é permitir o cadastro de funcionarios e cargaos com relacionamento entre as tabelas.

## Como executar o programa ▶️

Para executar o programa, siga as etapas abaixo:

1. Certifique-se de ter o ambiente de desenvolvimento Laravel configurado em sua máquina.
2. Clone este repositório em seu ambiente local.
3. Abra o terminal e navegue até o diretório do projeto.
4. Execute o comando `composer install` para instalar as dependências do Laravel.
5. Crie um arquivo `.env` na raiz do projeto e configure as informações do banco de dados.
6. Execute o comando `php artisan migrate` para criar as tabelas do banco de dados.
7. Por fim, execute o comando `php artisan serve` para iniciar o servidor local.

Agora você pode acessar a API de cadastro de alunos através do endereço `http://localhost:8000`.

## Criação das tabelas e migrations 🗃️

Para criar as tabelas necessárias para o funcionamento da API, siga as etapas abaixo:

1. Certifique-se de ter configurado corretamente o arquivo `.env` com as informações do banco de dados.
2. No terminal, execute o comando `php artisan migrate` para executar as migrations e criar as tabelas no banco de dados.

## Controllers 🎛️

Este projeto possui os seguintes controllers:

- `CargoController`: Responsável por gerenciar as operações relacionadas aos cargos.
- `FuncionarioController`: Responsável por gerenciar as operações relacionadas aos funcionarios.

Você pode encontrar os controllers na pasta `app/Http/Controllers`.

## Observações 📝

Este projeto foi desenvolvido com fins de estudo, sinta-se à vontade para explorar e personalizar a API de acordo com suas necessidades.

