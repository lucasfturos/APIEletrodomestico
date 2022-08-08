## Back-end

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## API Eletrodomésticos

<p>
    Repositório criado com o objetivo de apresentar uma API simples utilizando o Laravel para o back-end e o Blade template para o front-end. A aplicação é um sistema de cadastro de eletrodomésticos contendo recursos para criação, listagem, edição e remoção de registros.
</p>

## Instalação e Configuração

<p>
    Para realizar a instalação deste repositório, faça os seguintes passos em seu terminal:
</p>

Clone o repositório em uma pasta
```
git clone https://github.com/lucasfturos/APIEletrodomestico.git
```

Instale as dependência utilizando o Composer dentro do pasta do projeto

```
cd APIEletrodomestico
php composer.phar install
```

Faça uma cópia do arquivo de configuração  
```
cp -R .env.example .env
```

Gere uma chave para a sua aplicação  
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

Faça a migração das bases de dados  
```
php artisan migrate --seed
```

## Iniciando a API

Inicie a aplicação com os comandos: 
```
php artisan serve
```

## Screnshot

Caso queira conhecer o projeto, a pasta Screnshot tem fotos das telas e algumas ações
