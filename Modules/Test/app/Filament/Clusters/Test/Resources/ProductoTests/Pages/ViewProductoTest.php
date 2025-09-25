<?php

namespace Modules\Test\Filament\Clusters\Test\Resources\ProductoTests\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Modules\Test\Filament\Clusters\Test\Resources\ProductoTests\ProductoTestResource;

class ViewProductoTest extends ViewRecord
{
    protected static string $resource = ProductoTestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
