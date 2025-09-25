<?php

namespace Modules\Test\Filament\TestAdminTest\Clusters\Productos\Resources\ProductoTests\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Modules\Test\Filament\TestAdminTest\Clusters\Productos\Resources\ProductoTests\ProductoTestResource;

class ListProductoTests extends ListRecords
{
    protected static string $resource = ProductoTestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
