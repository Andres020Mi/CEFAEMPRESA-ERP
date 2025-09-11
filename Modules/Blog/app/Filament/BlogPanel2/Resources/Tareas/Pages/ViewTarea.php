<?php

namespace Modules\Blog\Filament\BlogPanel2\Resources\Tareas\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Modules\Blog\Filament\BlogPanel2\Resources\Tareas\TareaResource;

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
