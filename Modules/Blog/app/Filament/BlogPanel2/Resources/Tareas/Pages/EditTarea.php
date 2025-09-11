<?php

namespace Modules\Blog\Filament\BlogPanel2\Resources\Tareas\Pages;

use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Modules\Blog\Filament\BlogPanel2\Resources\Tareas\TareaResource;

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
