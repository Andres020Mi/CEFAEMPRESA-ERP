<?php

namespace Modules\Blog\Filament\Resources\Tareas\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TareaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('titulo'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
