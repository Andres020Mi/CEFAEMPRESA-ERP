<?php

namespace Modules\Blog\Filament\BlogPanel1\Resources\Tarea2s\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Modules\Blog\Filament\BlogPanel1\Resources\Tarea2s\Tarea2Resource;

class ListTarea2s extends ListRecords
{
    protected static string $resource = Tarea2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
