<?php

namespace Modules\Test\Filament\Clusters\Test\Resources\ProductoTests\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProductoTestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('descripcion')
                    ->required(),
            ]);
    }
}
