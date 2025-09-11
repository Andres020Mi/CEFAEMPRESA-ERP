<?php

namespace Modules\Blog\Filament\BlogBlog\Resources\Tareas\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Blog\Filament\BlogBlog\Resources\Tareas\TareaResource;

class CreateTarea extends CreateRecord
{
    protected static string $resource = TareaResource::class;
}
