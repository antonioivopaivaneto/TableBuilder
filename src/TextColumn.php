<?php

declare(strict_types=1);

namespace TabelaBuilder;

class TextColumn extends Column
{
    protected bool $sortable = false;
    protected bool $searchable = false;

    public function sortable(): self
    {
        $this->sortable = true;
        return $this;
    }

    public function searchable(): self
    {
        $this->searchable = true;
        return $this;
    }
}
