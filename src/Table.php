<?php

declare(strict_types=1);

namespace TabelaBuilder;

class Table
{
    protected array $columns = [];
    protected array $data = [];

    public static function make(): self
    {
        return new self();
    }

    public function columns(array $columns): self
    {
        $this->columns = $columns;
        return $this;
    }

    public function data(array $data): self
    {
        $this->data = $data;
        return $this;
    }

    public function render(): string
    {
        $html = '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">';
        $html .= '<table class="table table-bordered"><thead><tr>';

        foreach ($this->columns as $column) {
            $html .= '<th>' . htmlspecialchars($column->getLabel()) . '</th>';
        }

        $html .= '</tr></thead><tbody>';

        foreach ($this->data as $row) {
            $html .= '<tr>';
            foreach ($this->columns as $column) {
                $value = $column instanceof BadgeColumn ? $column->getValue($row) : htmlspecialchars($column->getValue($row));
                $html .= "<td>$value</td>";
            }
            $html .= '</tr>';
        }

        $html .= '</tbody></table>';
        return $html;
    }
}
