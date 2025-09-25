<?php

namespace Modules\Test\Filament\TestAdminTest\Resources\ProductoTests\Pages;

use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Modules\Test\Filament\TestAdminTest\Resources\ProductoTests\ProductoTestResource;

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
