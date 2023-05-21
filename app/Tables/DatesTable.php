<?php

namespace App\Tables;

use App\Models\Dates;
use Okipa\LaravelTable\Abstracts\AbstractTableConfiguration;
use Okipa\LaravelTable\Column;
use Okipa\LaravelTable\Formatters\DateFormatter;
use Okipa\LaravelTable\RowActions\DestroyRowAction;
use Okipa\LaravelTable\RowActions\EditRowAction;
use Okipa\LaravelTable\Table;

class DatesTable extends AbstractTableConfiguration
{
    protected function table(): Table
    {
        return Table::make()->model(Dates::class);
    }

    protected function columns(): array
    {
        return [
//            Column::make('id')->sortable(),
            Column::make('place_name')->sortable(),
            Column::make('description')->sortable(),
            Column::make('website')->sortable(),
        ];
    }

    protected function results(): array
    {
        return [
            // The table results configuration.
            // As results are optional on tables, you may delete this method if you do not use it.
        ];
    }
}
