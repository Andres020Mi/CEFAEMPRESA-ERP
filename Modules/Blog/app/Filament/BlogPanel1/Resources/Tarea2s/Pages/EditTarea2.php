<?php

namespace Modules\Blog\Filament\BlogPanel1\Resources\Tarea2s\Pages;

use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Modules\Blog\Filament\BlogPanel1\Resources\Tarea2s\Tarea2Resource;

class EditTarea2 extends EditRecord
{
    protected static string $resource = Tarea2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
