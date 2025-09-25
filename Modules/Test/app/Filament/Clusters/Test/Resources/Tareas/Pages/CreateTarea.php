<?php

namespace Modules\Test\Filament\Clusters\Test\Resources\Tareas\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Test\Filament\Clusters\Test\Resources\Tareas\TareaResource;

class CreateTarea extends CreateRecord
{
    protected static string $resource = TareaResource::class;
}
