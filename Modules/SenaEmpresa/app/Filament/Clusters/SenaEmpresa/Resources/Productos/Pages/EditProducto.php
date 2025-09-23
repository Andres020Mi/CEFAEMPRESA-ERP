<?php

namespace Modules\SenaEmpresa\Filament\Clusters\SenaEmpresa\Resources\Productos\Pages;

use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Modules\SenaEmpresa\Filament\Clusters\SenaEmpresa\Resources\Productos\ProductoResource;

class EditProducto extends EditRecord
{
    protected static string $resource = ProductoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
