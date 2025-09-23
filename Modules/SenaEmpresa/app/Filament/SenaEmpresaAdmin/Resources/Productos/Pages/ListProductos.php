<?php

namespace Modules\SenaEmpresa\Filament\SenaEmpresaAdmin\Resources\Productos\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Modules\SenaEmpresa\Filament\SenaEmpresaAdmin\Resources\Productos\ProductoResource;

class ListProductos extends ListRecords
{
    protected static string $resource = ProductoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
