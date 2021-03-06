<h1 align="center"> API Rest (Ranking por movimento) </h1>

<p align="center"><a href="https://github.com/juxfarias/competicao" target="_blank"><img src=".others/api_img.png"></a></p>

<p align="center">
<img src="http://img.shields.io/static/v1?label=STATUS&message=em%20analise&color=GREEN&style=for-the-badge"/>
</p>

## Sobre o projeto

A finalidade desta API é trazer o ranking dos atletas por tipo de movimento executado, onde atletas com a mesma pontuação, devem ocupar a mesma posição no ranking.

<h5>Exemplo de chamada da API utilizando o Postman</h5>
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/juxfarias/competicao/blob/main/.others/api_chamada.jpg"></a></p>

:arrow_right: [Resposta em json](https://raw.githubusercontent.com/juxfarias/competicao/main/.others/api_response.json)

## Instalação

- Executar o "git clone https://github.com/juxfarias/competicao.git";
- Executar o "composer install";
- Renomear o arquivo ".env.example" para ".env";
- Executar o "php artisan key:generate";
- Criar um banco no SGBD e realizar as devidas configurações no ".env";
- Executar o "php artisan migrate --seed";
- Executar o "php artisan serve".

## Endereço da API

**api/rankingMovement**

## Tecnologias utilizadas

- PHP 8.1.6;
- Laravel 9.15.0;
- Visual Studio Code;
- MySQL;
- Postman.

## Autora

<img src="https://avatars.githubusercontent.com/u/49696836?v=4" width=115><br><sub>:raising_hand: <b>Juliana Farias</b></sub>


