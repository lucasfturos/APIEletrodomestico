## Back-end

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Front-end

<p align="center"><a href="https://vuejs.org" target="_blank" rel="noopener noreferrer"><img width="100" src="https://vuejs.org/images/logo.png" alt="Vue logo"></a></p>

<p align="center">
  <a href="https://circleci.com/gh/vuejs/vue/tree/dev"><img src="https://img.shields.io/circleci/project/github/vuejs/vue/dev.svg?sanitize=true" alt="Build Status"></a>
  <a href="https://codecov.io/github/vuejs/vue?branch=dev"><img src="https://img.shields.io/codecov/c/github/vuejs/vue/dev.svg?sanitize=true" alt="Coverage Status"></a>
  <a href="https://npmcharts.com/compare/vue?minimal=true"><img src="https://img.shields.io/npm/dm/vue.svg?sanitize=true" alt="Downloads"></a>
  <a href="https://www.npmjs.com/package/vue"><img src="https://img.shields.io/npm/v/vue.svg?sanitize=true" alt="Version"></a>
  <a href="https://www.npmjs.com/package/vue"><img src="https://img.shields.io/npm/l/vue.svg?sanitize=true" alt="License"></a>
  <a href="https://chat.vuejs.org/"><img src="https://img.shields.io/badge/chat-on%20discord-7289da.svg?sanitize=true" alt="Chat"></a>
</p>

<p align="center"><a href="https://inertiajs.com/" target="_blank" rel="noopener noreferrer"><img width="650px" src="https://raw.githubusercontent.com/inertiajs/inertia/master/.github/LOGO.png" alt="Inertia logo"></a></p>

## API Eletrodom??sticos

<p>
    Reposit??rio criado com o objetivo de apresentar uma API simples utilizando o Laravel para o back-end e o Vue para o front-end. A aplica????o ?? um sistema de cadastro de eletrodom??sticos contendo recursos para cria????o, listagem, edi????o e remo????o de registros.
</p>

## Instala????o e Configura????o

<p>
    Para realizar a instala????o deste reposit??rio, fa??a os seguintes passos em seu terminal:
</p>

Clone o reposit??rio em uma pasta
```
git clone https://github.com/lucasfturos/APIEletrodomestico.git
```

Instale as depend??ncias utilizando o Composer dentro do pasta do projeto
```
cd APIEletrodomestico
php composer.phar install
```

Instale as depend??ncias do Vue js dentro da pasta do projeto
```
npm install
```

Fa??a uma c??pia do arquivo de configura????o  
```
cp -R .env.example .env
```

Gere uma chave para a sua aplica????o  
```
php artisan key:generate
```

Eu utilizei a base de dados em MySql, no arquivo .env mude os seguintes valores

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE="Crie um banco de dados e coloque o nome aqui (tire as aspas dupla)"
DB_USERNAME="Informe seu nome de usuario aqui (tire as aspas dupla)"
DB_PASSWORD="Informe sua se senha (se tiver) aqui (tire as aspas dupla)"
```

Fa??a a migra????o das bases de dados  
```
php artisan migrate --seed
```

## Iniciando a API

Inicie a aplica????o com o comando 
```
php artisan serve
npm run watch-poll
```

## Problemas

Por enquanto o projeto n??o est?? funcionando a parte de edi????o/atualiza????o dos dados,
mas logo ser?? implementado

