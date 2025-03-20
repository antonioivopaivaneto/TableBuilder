# ConstructTable

Uma biblioteca PHP para gerar tabelas HTML dinâmicas de forma simples e organizada.

## Instalação

### Opção 1: Instalação via Composer (Pacote Local)

Se estiver usando o pacote localmente, adicione o repositório no `composer.json` do seu projeto:

```json
{
    "repositories": [
        {
            "type": "path",
            "url": "../construct-table"
        }
    ],
    "require": {
        "seu-usuario/construct-table": "*"
    }
}
```

Depois, execute:

```sh
composer update
```

ou

```sh
composer require seu-usuario/construct-table
```

### Opção 2: Instalação via Packagist (Se publicado)

```sh
composer require seu-usuario/construct-table
```

## Como Usar

Após a instalação, importe as classes e crie sua tabela:

```php
require 'vendor/autoload.php';

use ConstructTable\Table;
use ConstructTable\TextColumn;
use ConstructTable\BadgeColumn;

$data = [
    ['title' => 'Produto 1', 'status' => 'pendente', 'created_at' => '2024-03-20'],
    ['title' => 'Produto 2', 'status' => 'concluído', 'created_at' => '2024-03-19'],
];

$table = Table::make()->columns([
    TextColumn::make('title')->sortable()->searchable(),
    BadgeColumn::make('status')->colors(['pendente' => 'red', 'concluído' => 'green']),
    TextColumn::make('created_at'),
])->data($data);

echo $table->render();
```

## Recursos

- **Criação de colunas dinâmicas** (`TextColumn`, `BadgeColumn`, etc.)
- **Suporte a ordenação e busca**
- **Estilização com Bootstrap**
- **Personalização de cores para badges**

## Personalizando a Tabela

Se quiser usar estilos do Bootstrap, inclua o CSS no seu projeto e a tabela será estilizada automaticamente:

```html
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
```

## Licença

Este projeto está sob a licença MIT. Sinta-se à vontade para usar e contribuir!
