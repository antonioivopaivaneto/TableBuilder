<?php

declare(strict_types=1);

namespace TabelaBuilder;

abstract class Column
{
    protected string $name;
    protected string $label;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->label = ucfirst(str_replace('_', ' ', $name));
    }

    public static function make(string $name): static
    {
        return new static($name);
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getValue(array $row): string
    {
        return $row[$this->name] ?? '-';
    }
}
