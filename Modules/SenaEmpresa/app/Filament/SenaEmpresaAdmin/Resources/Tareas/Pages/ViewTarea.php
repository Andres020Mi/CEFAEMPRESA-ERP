<?php

namespace Modules\SenaEmpresa\Filament\SenaEmpresaAdmin\Resources\Tareas\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Modules\SenaEmpresa\Filament\SenaEmpresaAdmin\Resources\Tareas\TareaResource;

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
