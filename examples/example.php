<?php

require __DIR__ . '/../vendor/autoload.php';

use TabelaBuilder\{Table, TextColumn, BadgeColumn};

$data = [
    ['title' => 'Product 1', 'status' => 'pending', 'created_at' => '2021-01-01'],
    ['title' => 'Product 2', 'status' => 'completed', 'created_at' => '2021-01-02'],
];

$table = Table::make()->columns([
    TextColumn::make('title')->sortable()->searchable(),
    BadgeColumn::make('status')->colors(['pending' => 'red', 'completed' => 'green']),
    TextColumn::make('created_at'),
])->data($data);

echo $table->render();
