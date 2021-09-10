# Laravel - Migrations e Seeds das corretoras de investimento do Brasil
[![NPM](https://img.shields.io/npm/l/react)](https://github.com/andersonpereiradossantos/laravel-migration-seed-corretoras-brasil/blob/main/LICENSE) 
# Sobre o código
Arquivos de migração e inserção (migrations e seeds) Laravel de todas as corretoras do Brasil atualizados (09/09/2021) com dados extraídos do [CVM](https://sistemas.cvm.gov.br/asp/cvmwww/InvNRes/tabecus.asp). Contém também a Model de Corretoras com todos os campos mapeados.

Na seguinte estrutura:

##### Corretora
- Id (primary key)
- CNPJ (cnpj)
- Nome (nome)

# Como executar o projeto
Pré-requisitos: Laravel 5.X, 6.X, 7.X, 8.x ou superior

```bash
# Clonar repositório
git clone https://github.com/andersonpereiradossantos/laravel-migration-seed-corretoras-brasil.git

# Adicionar arquivos nas respectivas pastas

# Executar o comando de migração (Com bastante cautela para não perder os dados existentes no seu banco de dados)
php artisan migrate --seed
```

# Exemplos de utilização com o Eloquent
```php
// Obter todos os bancos ordenados por nome
$corretoras = Corretora::all()->sortBy('nome');

// Obter corretora específica através do cnpj (062169875000179 - Easynvest)
$easynvest = Corretora::where('cnpj', '062169875000179')->first();
```
# Autor
Anderson Pereira dos Santos

[Linkedin](https://www.linkedin.com/in/andersonpereirasantos)

[Github](https://github.com/andersonpereiradossantos)
