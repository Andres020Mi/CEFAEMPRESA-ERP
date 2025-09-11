<?php

namespace Modules\Blog\Filament\BlogBlog\Resources\Tareas\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Modules\Blog\Filament\BlogBlog\Resources\Tareas\TareaResource;

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
