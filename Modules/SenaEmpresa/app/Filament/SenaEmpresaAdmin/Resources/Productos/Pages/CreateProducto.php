<?php

namespace Modules\SenaEmpresa\Filament\SenaEmpresaAdmin\Resources\Productos\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\SenaEmpresa\Filament\SenaEmpresaAdmin\Resources\Productos\ProductoResource;

class CreateProducto extends CreateRecord
{
    protected static string $resource = ProductoResource::class;
}
