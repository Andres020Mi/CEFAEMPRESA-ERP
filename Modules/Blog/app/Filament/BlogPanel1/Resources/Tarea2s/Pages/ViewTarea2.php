<?php

namespace Modules\Blog\Filament\BlogPanel1\Resources\Tarea2s\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Modules\Blog\Filament\BlogPanel1\Resources\Tarea2s\Tarea2Resource;

class ViewTarea2 extends ViewRecord
{
    protected static string $resource = Tarea2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
