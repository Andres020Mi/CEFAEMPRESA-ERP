<?php

namespace Modules\Test\Filament\Clusters\Test\Resources\Tareas\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Modules\Test\Filament\Clusters\Test\Resources\Tareas\TareaResource;

class ViewTarea extends ViewRecord
{
    protected static string $resource = TareaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
