<?php

namespace Modules\SenaEmpresa\Filament\Clusters\SenaEmpresa\Resources\Productos\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Modules\SenaEmpresa\Filament\Clusters\SenaEmpresa\Resources\Productos\ProductoResource;

class ViewProducto extends ViewRecord
{
    protected static string $resource = ProductoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
