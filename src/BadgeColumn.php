<?php

declare(strict_types=1);

namespace TabelaBuilder;

class BadgeColumn extends Column
{
    protected array $colors = [];

    public function colors(array $colors): self
    {
        $this->colors = $colors;
        return $this;
    }

    public function getValue(array $row): string
    {
        $value = $row[$this->name] ?? '-';
        $color = $this->colors[$value] ?? 'gray';

        return "<span class='badge text-white' style='background:$color;padding:3px 6px;border-radius:3px'>$value</span>";
    }
}
