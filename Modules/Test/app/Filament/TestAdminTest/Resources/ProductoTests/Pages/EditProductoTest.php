<?php

namespace Modules\Test\Filament\TestAdminTest\Resources\ProductoTests\Pages;

use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Modules\Test\Filament\TestAdminTest\Resources\ProductoTests\ProductoTestResource;

class EditProductoTest extends EditRecord
{
    protected static string $resource = ProductoTestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
