<?php

namespace Modules\SenaEmpresa\Filament\Clusters\SenaEmpresa\Resources\Productos\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\SenaEmpresa\Filament\Clusters\SenaEmpresa\Resources\Productos\ProductoResource;

class CreateProducto extends CreateRecord
{
    protected static string $resource = ProductoResource::class;
}
