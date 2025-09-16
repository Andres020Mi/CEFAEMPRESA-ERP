<?php

namespace App\Filament\Resources\Tareas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TareaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('texto')
                    ->required(),
            ]);
    }
}
