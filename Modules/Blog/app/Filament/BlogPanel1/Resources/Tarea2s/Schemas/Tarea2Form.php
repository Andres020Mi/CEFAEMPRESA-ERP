<?php

namespace Modules\Blog\Filament\BlogPanel1\Resources\Tarea2s\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class Tarea2Form
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('titulo')
                    ->required(),
            ]);
    }
}
