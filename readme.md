<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre o projeto
	
	Api REST de produtos.

## Passos para rodar o projeto

1º - Rodar "composer install"
2º - Criar arquivo .env usando o .env.example como base
3º - Configurar banco no arquivo .env e no config/database.php
4° - Rodar "php artisan migrate:fresh --seed" para atualizar o banco e populá-lo
5º - Rodar "npm install" para instalar o npm
6° - Rodar "npm run dev" para atualizar os assets
7° - Rodar "php artisan serve" para iniciar o servidor
