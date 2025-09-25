<?php

namespace Modules\Test\Filament\Clusters\Tarea\Resources\Tareas\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Modules\Test\Filament\Clusters\Tarea\Resources\Tareas\TareaResource;

class ListTareas extends ListRecords
{
    protected static string $resource = TareaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
