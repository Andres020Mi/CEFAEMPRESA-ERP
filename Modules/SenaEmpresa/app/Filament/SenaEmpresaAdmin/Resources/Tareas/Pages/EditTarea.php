<?php

namespace Modules\SenaEmpresa\Filament\SenaEmpresaAdmin\Resources\Tareas\Pages;

use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Modules\SenaEmpresa\Filament\SenaEmpresaAdmin\Resources\Tareas\TareaResource;

class EditTarea extends EditRecord
{
    protected static string $resource = TareaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
